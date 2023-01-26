<?php

    function student($student_id, $student_name, $Password, $Sex,$strHobbyFav = "" ,$strColorFav = "" ){
        echo "รหัสนักศึกษา : ".$student_id."<br>";
        echo "ชื่อ : ".$student_name."<br>";
        echo "รหัสนักศึกษา : ".$Password."<br>";
        echo "เพศ : ".$result = ($Sex == 1 ? "male" : "female")."<br>";
        $strHobbyFav = "";
            for ($i = 0; $i < count($_POST["hobby"]); $i++) {
                if (($_POST["hobby"][$i]) != "") {
                    $strHobbyFav = $strHobbyFav . $_POST["hobby"][$i] . ($i < count($_POST["hobby"]) - 1 ? ", " : "");
                }
            }
        echo "My hobby is : ".$strHobbyFav."<br>";

        $strColorFav = "";
            for ($i = 0; $i < count($_POST["color"]); $i++) {
                if (trim($_POST["color"][$i]) != "") {
                    $strColorFav = $strColorFav . $_POST["color"][$i] . ($i < count($_POST["color"]) - 1 ? ", " : "");
                }
            }
        echo "My Fav color is : ".$strColorFav."<br>";
    }

    $student_id = $_POST['stdID'];
    $student_name = $_POST['stdName'];
    $Password = $_POST['Password'];
    $Sex = $_POST['sex'];
 
?>

<html>

<head>
    <title> form student</title>
</head>

    <body style="background-color:rgba(107,119,141,1);" >

        <br><center>
        <br><br><br><br>

        <h2 style=color:rgba(23,34,59,1)> ข้อมูลผู้ใช้ </h2>
        
        <br>

            <p style="font-family:courier;">
            <?php
                student($student_id, $student_name, $Password, $Sex);
            ?>

            </p><br>

        <br>
        <button onclick="document.location='ex2-27.php'">Back</button>

        </center>
    </body>

</html>


<!-- <h2 style=color:rgba(23,34,59,1);>สรุปข้อมูล </h2><br> -->

        

        <!-- <table border ="2px">
            <tr>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>รหัสผ่าน</th>
                    <th>เพศ</th>
                    <th>งานอดิเรก</th>
                    <th>สีที่ชอบ</th>
        </tr>

        <tr style="font-family:courier;">
                
            <td><?php echo $student_id ?></td>
            <td><?php echo $student_name ?></td>
            <td><?php echo $Password ?></td>
            <td><?php echo ($Sex == 1 ? "male" : "female") ?></td>
            <td><?php echo $strHobbyFav ?></td>
            <td><?php echo $strColorFav ?></td>
            </tr>
               
        </table> -->