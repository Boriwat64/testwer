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
    
<form action="form1.php" method="post">

    <table border="1" width="600" align="center">
        <tr>
        <td colspan="2" align="center">เพิ่มข้อมูลลูกค้า</td>
        </tr>
            <td><p>*require field</p></td>
        <tr>
            <td>ชื่อ-นามสกุล </td>
            <td><input type="text" name= "name" value="" ></td>
        </tr>
        <tr>
        <td> ที่อยู่ : </td>
        <td><textarea name="address" id="address" cols="30" rows="5" value=""></textarea></td>  
        </tr>
        <tr>
        <td> อีเมลล์</td> 
        <td><input type="text" name= "email" value=""></td>
        </tr>
        <tr>
        <td>หมายเลขโทรศัพท์ : </td>
        <td><input type="text" name= "tel" value="" minlength="10" width="20"></td>
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