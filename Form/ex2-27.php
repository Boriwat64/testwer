<html>
<head>
    <title> Form For Student </title>
</head>
<h4>
<body style="background-color:rgba(107,119,141,1);" >
    <center><h2 style=color:rgba(23,34,59,1)>แบบฟอร์มเก็บข้อมูลนักศึกษา</h2></center>
    <form action="lap2-27cal.php" method="post" name="form" id="form">

        รหัสนักศึกษา :
        <input type="text" maxlength="13" name="stdID" /><br />

        ชื่อนามสกุล นักศึกษา :
        <input type="text" size="40" name="stdName" /><br />

        รหัสผ่าน :
        <input type="password" maxlength="6" size="6" name="Password" /><br />

        เพศ :
        <input type="radio" name="sex" value="1" /> ชาย
        <input type="radio" name="sex" value="2" /> หญิง <br />

        งานอดิเรก :
        <input type="checkbox" value="Read a book" name="hobby[]" /> อ่านหนังสือ
        <input type="checkbox" value="watching-tv" name="hobby[]" /> ดูโทรทัศน์
        <input type="checkbox" value="Sport" name="hobby[]" /> เล่นกีฬา 
        <input type="checkbox" value="Play Game" name="hobby[]" /> เล่นเกมส์
        <input type="checkbox" value="watching a series" name="hobby[]" /> ดูซีรีย์  <br />

        Please enter your color : <br />
        <input type="checkbox" value="Red" name="color[]" /> Red <br />
        <input type="checkbox" value="Blue" name="color[]" /> Blue <br />
        <input type="checkbox" value="Green" name="color[]" /> Green <br />
        <input type="checkbox" value="Orange" name="color[]" /> Orange <br />
        <input type="checkbox" value="Black" name="color[]" /> Black <br />

        
        อัพโหลด : <input type="file" /><br><br><br>

        <input type="submit" value="SUBMIT" name="SUBMIT"/><br />

    </form>
</body>
</h4>
</html>