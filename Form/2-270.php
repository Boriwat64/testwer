<html>
<head><title> การสร้างฟอร์ม </title></head>
<body>
<?php
if(isset($_POST['submit'])){

    $N_name = $_POST['N_name'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $sex = $_POST['sex'];

    function student ($id,$N_name,$pw,$sex){
        echo "<p>";
        echo "รหัสนักศึกษา : ".$id."<br/>";
        echo "ชื่อ-นามสกุลนักศึกษา :  ".$N_name."<br/>";
        echo " รหัส่ผ่าน : ".$pw."<br/>";
        echo " เพศ :  ".$sex."<br/>";
        echo " งานอดิเรก : ";
        }
        
        student($id, $N_name, $pw, $sex);
        
        function interest($_hobby,$_color){
    
            for($i=0;$i<count($_hobby);$i++){
                if(trim($_hobby[$i]) != ""){
                    echo "hobby : ".$_hobby[$i]."<br>";
                }
            }
        
            for($i=0;$i<count($_color);$i++){
                if(trim($_color[$i]) != ""){
                    echo "chkColor : ".$_color[$i]."<br>";
                }
            }
         }

         interest($_POST)
}
else{
    ?>
<h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
<form action="2-270.php" method="post" name="form1" id="form1">
รหัสนักศึกษา : <input type="text" maxlength="10" name="id"/><br />
ชื่อ-นามสกุลนักศึกษา : <input type="text" size="40" name="N_name"/><br />
รหัส่ผ่าน : <input type="password" maxlength="6" size="6" name="pw"/><br />
เพศ : <input type="radio" name="sex" value="ชาย" /> ชาย
<input type="radio" name="sex" value="หญิง" /> หญิง <br />
งานอดิเรก :
<input type="checkbox" value="อ่านหนังสือ" name="hobby[]" /> อ่านหนังสือ
<input type="checkbox" value="ดูโทรทัศน์" name="hobby[]" /> ดูโทรทัศน์
<input type="checkbox" value="เล่นกีฬา" name="hobby[]"/> เล่นกีฬา<br />

<input type="checkbox" value="แดง" name="chkColor[]" /> แดง
<input type="checkbox" value="ฟ้า" name="chkColor[]" /> ฟ้า
<input type="checkbox" value="เขียว" name="chkColor[]"/> เขียว<br />

อัพโหลดข้อมูล : <input type="file" /> <br />
<input type="submit" name="Submit" value=" OK " />
<input type="reset" name="Reset" value=" Clear " />
</form>

<?php
}
?>
</body>
</html>





    
