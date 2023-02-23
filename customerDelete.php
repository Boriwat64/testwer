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

    $sql = "delete from book where customerid= '$customerid'";
    mysqli_query($conn, $sql) or die ("delete จากตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
    mysqli_close($conn);
    header("location:customerList.php");

?>