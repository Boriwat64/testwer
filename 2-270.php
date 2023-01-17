<html>
<head><title> การสร้างฟอร์ม </title></head>
<body>
<h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
<form action="2-27form.php" method="post" name="form1" id="form1">

รหัสนักศึกษา : <input type="text" maxlength="10" name="id"/><br />

ชื่อ-นามสกุลนักศึกษา : <input type="text" size="40" name="N_name"/><br />

รหัส่ผ่าน : <input type="password" maxlength="6" size="6" name="pw"/><br />

เพศ : <input type="radio" name="sex" value="ชาย" /> ชาย
<input type="radio" name="sex" value="หญิง" /> หญิง <br />

งานอดิเรก :
<input type="checkbox" value="อ่านหนังสือ" name="book" /> อ่านหนังสือ
<input type="checkbox" value="ดูโทรทัศน์" name="tv" /> ดูโทรทัศน์
<input type="checkbox" value="เล่นกีฬา" name="sport"/> เล่นกีฬา<br />

<input type="checkbox" value="แดง" name="chkColor[]" /> แดง
<input type="checkbox" value="ฟ้า" name="chkColor[]" /> ฟ้า
<input type="checkbox" value="เขียว" name="chkColor[]"/> เขียว<br />

อัพโหลดข้อมูล : <input type="file" /> <br />
<input type="submit" name="Submit" value=" OK " />
<input type="reset" name="Reset" value=" Clear " />
</form>
</body>
</html>