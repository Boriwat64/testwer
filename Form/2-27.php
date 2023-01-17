<html>
<head>
    <title> การสร้างฟอร์ม </title>
</head>

<body style="background-color:#FF9999">
<center>
    <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
    <form action="2-27form.php" method="post" name="form1" id="form1">

        รหัสนักศึกษา :
        <!-- input รหัสนักศึกษา -->
        <input type="text" maxlength="13" name="student-ID" /><br />

        ชื่อนามสกุล นักศึกษา :
        <!-- input ชื่อนามสกุล  -->
        <input type="text" size="40" name="student-Name" /><br />

        รหัสผ่าน :
        <!-- input หรัสผ่าน -->
        <input type="password" maxlength="6" size="6" name="student-Password" /><br />

        เพศ :
        <!-- input เพศ -->
        <input type="radio" name="sex" value="ชาย" /> ชาย
        <input type="radio" name="sex" value="หญิง" /> หญิง <br />

        งานอดิเรก :
        <!-- input hobby  -->
        <input type="checkbox" value="อ่านหนังสือ" name="hobby[]" /> อ่านหนังสือ
        <input type="checkbox" value="ดูโทรทัศน์" name="hobby[]" /> ดูโทรทัศน์
        <input type="checkbox" value="เล่นกีฬา" name="hobby[]" /> เล่นกีฬา <br />

        <br>
        สีที่ชอบ : <br />
        <!-- -- input color --   -->
        <input type="checkbox" value="แดง" name="color[]" /> แดง <br />
        <input type="checkbox" value="ฟ้า" name="color[]" /> ฟ้า <br />
        <input type="checkbox" value="เขียว" name="color[]" /> เขียว <br />
        <input type="checkbox" value="ส้ม" name="color[]" /> ส้ม <br />
        <input type="checkbox" value="ดำ" name="color[]" /> ดำ <br />
        <br>

        อัพโหลด : <input type="file" /><br />
        <!-- upload-data -->
        <!-- submit data  and  reset all data-->
        <br>
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
    </form>
</body>

</html>

