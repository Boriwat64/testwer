<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ</title></head>
<body>
<?php
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

    
  function hobby ($book,$tv,$sport){
    if(!empty($_POST["book"]))
    {
        $book = $_POST["book"];
        echo " <i> $book </i> ";
    }
    if(!empty($_POST["tv"]))
    {
        $tv = $_POST["tv"];
        echo " ,<i> $tv </i> ";
    }
    if(!empty($_POST["sport"]))
    {
        $sport = $_POST["sport"];
        echo " ,<i> $sport </i> ";
    }
 }
 hobby($book,$tv,$sport);

 
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
?>
<br><a href="2-270.php">Back</a>
</body>
</html>
