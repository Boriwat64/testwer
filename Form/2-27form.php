<?php

    // get value
    $student_id = $_POST['student-ID'];
    $student_name = $_POST['student-Name'];
    $student_Password = $_POST['student-Password'];
    $student_Sex = $_POST['sex'];
    // hobby output
    $strHobbyFav = "";
    for ($i = 0; $i < count($_POST["hobby"]); $i++) {
        if (($_POST["hobby"][$i]) != "") {
            $strHobbyFav = $strHobbyFav . $_POST["hobby"][$i] . ($i < count($_POST["hobby"]) - 1 ? ", " : "");
        }
    }

    // fav color output
    $strColorFav = "";
    for ($i = 0; $i < count($_POST["color"]); $i++) {
        if (trim($_POST["color"][$i]) != "") {
            $strColorFav = $strColorFav . $_POST["color"][$i] . ($i < count($_POST["color"]) - 1 ? ", " : "");
        }
    }

?>


<html>

<head>
    <title> form student</title>
</head>

    <body style="background-color:#FF99CC" >

        <br><center>
        <h2 style=color:#0033FF> ข้อมูลผู้ใช้ </h2>

            <p style="font-family:courier;">
                รหัสนักศึกษา : <?php echo $student_id ?> <br />
                ชื่อ : <?php echo $student_name ?> <br/>
                รหัสผ่าน : <?php echo $student_Password ?> <br/>
                เพศ : <?php echo $student_Sex ?> <br />

                งานอดิเรก : <?php echo $strHobbyFav ?> <br />
                สีที่ชอบ : <?php echo $strColorFav ?> <br />
            </p>

        <h2 style=color:#9933CC>สรุปข้อมูล </h2>

        <table border ="2px">
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
            <td><?php echo $student_Password ?></td>
            <td><?php echo $student_Sex ?></td>
            <td><?php echo $strHobbyFav ?></td>
            <td><?php echo $strColorFav ?></td>
            </tr>
               
        </table>

        <br>
        <button onclick="document.location='2-27.php'">Back</button>

        </center>
    </body>

</html>