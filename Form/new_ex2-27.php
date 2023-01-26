<html>
<head>
    <title> Form For Student </title>
</head>
<body style="background-color:rgba(107,119,141,1);" >
    
        <html>
        
        <head>
            <title> form student</title>
        </head>
        
        <br><br>    
        <center><h2 style=color:rgba(23,34,59,1)>แบบฟอร์มเก็บข้อมูลนักศึกษา</h2></center>
        <form action="new_ex2-27.php" method="post" name="form" id="form">

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
    <center>
    <h2 style=color:rgba(23,34,59,1)> ข้อมูลผู้ใช้ </h2>
    
        <br>
        <br>
        
        <p style="font-family:courier;">
        <?php
        if(isset($_POST['SUBMIT']))
        {
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

            student($student_id, $student_name, $Password, $Sex);

        }
        ?>
        </p><br>
        
        <br>
        <button onclick="document.location='new_ex2-27.php'">Back</button>
        
        </center>
    

</body>
</html>