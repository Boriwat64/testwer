<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p {
        color: red;
    }
</style>
<body>

<?php
    $customerid = $_REQUEST['customerid'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สามารถติดต่อdyp MySQL ได้");
    mysqli_select_db($conn, $dbName) or die ("ไม่สามารถเลือกฐานข้อมูลได้");
   
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_connection=utf8mb4");

    $sql = "select * from book WHERE customerid = '$customerid'";
    $dbQuery = mysqli_query($conn, $sql);

    if(!$dbQuery)
        die("select join มีข้อมูลผิดพลาด".mysqli_error());
    $result=mysqli_fetch_object($dbQuery);

    ?>



<form action="customerUpdate2.php" method="post">

    <table border="1" width="600" align="center">
        <tr>
        <td colspan="2" align="center">เพิ่มข้อมูลลูกค้า</td>
        </tr>
            <td><p>*require field</p></td>
        
        </tr>
            <td width="200"> รหัส : </td>
            <td width="400"><input type="text" name= "customerid" value="<?php echo $result->customerid ?>" readonly ></td>
        
        <tr>

        <tr>
            <td>ชื่อ-นามสกุล </td>
            <td><input type="text" name= "name" value="<?php echo $result->customerName ?>" ></td>
        </tr>
        <tr>
        <td> ที่อยู่ : </td>
        <td><textarea name="address" id="address" cols="30" rows="5" ><?php echo $result->customerAddress ?></textarea></td>  
        </tr>
        <tr>
        <td> อีเมลล์</td> 
        <td><input type="text" name= "email" value="<?php echo $result->customerEmail ?>"></td>
        </tr>
        <tr>
        <td>หมายเลขโทรศัพท์ : </td>
        <td><input type="text" name= "tel" value="<?php echo $result->customerTel ?>" minlength="10" width="20"></td>
        </tr>
        
    </table>
    <br>
    <center>
        <button type="submit" name="submit">บันทึกข้อมูล</button>
        <button type="reset" name="reset">ล้างข้อมูล</button>
        <br><a href="customerList.php">Back</a>
        </center>
    </form>
</body>
</html>