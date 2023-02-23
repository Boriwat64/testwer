<html>
    <head>
        <title> </title>
        <meta chartset="UTF-8">
    </head>
    <body>
        <?php 
        echo "<center>";
        echo "<br><h3>รายชื่อลูกค้า</h3>";
        echo '<table width = "800" borer = "1">';
        echo '<tr><td align = "left"><a href = "form.php">เพิ่มข้อมูลลูกค้า</a></td><tr>';

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "bookstore";
        $conn = mysqli_connect($hostname, $username, $password);
        if (!$conn)
        {
            die("ไม่สามารถติดต่อ MySQL ได้");
        }
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือก");

        mysqli_query($conn,"set character_set_connection=utf8mb4");
        mysqli_query($conn,"set character_set_connection=utf8mb4");
        mysqli_query($conn,"set character_set_connection=utf8mb4");

        $sql = "select * from book order by customerId";
        $result = mysqli_query($conn, $sql);

        echo '<br><table width="800" border="1">';
        echo '<tr bgcolor="">';
        echo '<th width ="150">รหัส</th>';
        echo '<th width = "200">ชื่อ-นามสกุล</th>';
        echo '<th width = "200">ที่อยู่</th>';
        echo '<th width = "200">อีเมล์</th>';
        echo '<th width = "200">หมายเลขโทรสัพท์</th>';
        echo '<th width = "80">แก้ไข</th>';
        echo '<th width = "80">ลบ</th></tr>';

        while ($rs = mysqli_fetch_array($result))
        {
            echo '<tr align="center" bgcolor="">';
            echo '<td>'.$rs["customerid"].'</td>';
            echo '<td>' .$rs["customerName"].'</td>';
            echo '<td>' .$rs["customerAddress"].'</td>';
            echo '<td>' .$rs["customerEmail"].'</td>';
            echo '<td>' .$rs["customerTel"].'</td>';

            echo '<td><a href="customerUpdate1.php?customerid='.$rs["customerid"].'">[แก้ไข]</a></td>';
           echo '<td><a href="customerDelete.php?customerid='.$rs["customerid"].'" onclick="return confirm(\'ยืนยันการลบข้อมูลลูกค้ารหัส'.$rs["customerid"].'\')">[ลบ]</a></td>';
           echo '</tr>';

        }
        echo'</table>';
        mysqli_close ($conn);




?>
    </body>
<html>