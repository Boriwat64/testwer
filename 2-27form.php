<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ</title></head>
<body>
<?php
    $N_name = $_POST['N_name'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $sex = $_POST['sex'];
    
    
    
    echo "<p>";
    echo "รหัสนักศึกษา : <i> $id </i> <br/>";
    echo "ชื่อ-นามสกุลนักศึกษา : <i> $N_name </i> <br/>";
    echo " รหัส่ผ่าน :<i> $pw </i> <br/>";
    echo " เพศ :<i> $sex </i> <br/>";
    echo " งานอดิเรก : ";
 
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
    echo "<br>";
    for($i=0;$i<count($_POST["chkColor"]);$i++){
        if(trim($_POST["chkColor"][$i]) != ""){
            echo "chkColor $i =
            ".$_POST["chkColor"][$i]."<br>";
        }
    }
?>
<br><a href="2-27.php">Back</a>
</body>
</html>
