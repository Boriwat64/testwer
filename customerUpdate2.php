<?php
    $customerid = $_POST['customerid'];
    $customerName = $_POST['name'];
    $customerAddress = $_POST['address'];
    $customerEmail = $_POST['email'];
    $customerTel = $_POST['tel'];

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

    $sql = "update book set customerName='$customerName', customerAddress='$customerAddress', customerEmail='$customerEmail', customerTel='$customerTel' Where customerid='$customerid'";
    mysqli_query($conn, $sql) or die ("update ลงตาราง customer มีข้อมูลผิดพลาดเกิดขึ้น ".mysqli_error());
    mysqli_close($conn);
    echo '<br><br><h2>แก้ไขข้อมูลลูกค้ารหัส'.$customerid,'เรียบร้อย</h2>';
    echo'<br><br><a href ="customerList.php?">กลับหน้าcustomerList.php</a>';
    echo'</center>'
?>
