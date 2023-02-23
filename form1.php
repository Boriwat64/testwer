<html>
<head><title>เพิ่มข้อมูล</title></head>
<body>
<?php
    $N_name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    
    
    
   
    echo "ชื่อ-นามสกุลนักศึกษา : <i> $N_name </i> <br/>";
    
    echo "ที่อยู่ : <i>  $address </i> <br/>";
    
    echo " อีเมล์ :<i> $email  </i> <br/>";
    echo " หมายเลขโทรศัพท์ :<i> $tel </i> <br/>";
    
 
    if(empty(trim($N_name))|| empty(trim($address))|| empty(trim($email))||empty(trim($tel )))
    {
        echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน'); history.back()</script>;";
        exit();
    }

    else if(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬ่้๋ำอฮะาิีืึเแโใไๆ่้๊็ุุู่้a-zA-Z ]+$/", $N_name))
    {
        echo "<script>alert('Not use some character'); history.back()</script>;";
        exit();
    }

    else if (!filter_var(trim($email),FILTER_VALIDATE_EMAIL))
    {
        echo "<script>alert('$email is not a valid email address'); history.back()</script>;";
    }

    else if(!ctype_digit(trim($tel)))
    {
        echo "<script>alert('กรุณากรอก หมายเลขโทรศัพท์ให้ถูกต้อง'); history.back()</script>;";
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbNamme = "bookstore" ;

    $conn = mysqli_connect($hostname, $username, $password );

    

    echo '<center>';
    if(!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");

    mysqli_select_db($conn, $dbNamme)or die("ไม่สามารถเลือกฐานข้อมูล mySQL ได้");

    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_connection=utf8mb4");

    $sql = "insert into book(customerName,customerAddress,customerEmail,customerTel) values('$N_name','$address','$email','$tel')";

    mysqli_query($conn, $sql)or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น"   .mysqli_error());

    echo ' <br><br><h2>บันทึกข้อมูลลูกค้าชื่อ'.$N_name.' เรียบร้อย</h2>'; 
?>
<br><a href="form.php">Back</a>
</body>
</html>
