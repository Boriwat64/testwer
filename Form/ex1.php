<html>
<head><title> การสร้างฟอร์ม </title></head>
    <body>
    <h2>การคำนวนพื้นที่</h2>
        <form action="ex1.php" method="post" name="form1" id="form1">

            <input type="text1" maxlength="6" size="15" name="text1" /><br />
            <input type="text1" maxlength="6" size="15" name="text2" /><br />

            <input type="radio" name="square" value="สี่เหลี่ยมจตุรัส" /> สี่เหลี่ยมจตุรัส <br />
            <input type="radio" name="square" value="สี่เหลี่ยมผืนผ้า" /> สี่เหลี่ยมผืนผ้า <br />
            <input type="radio" name="square" value="สี่เหลี่ยมขนมเปียกปูน" /> สี่เหลี่ยมขนมเปียกปูน <br />
            <input type="radio" name="square" value="สามเหลี่ยม" /> สามเหลี่ยม <br />

        <td colspan="2" align="center">
                    <input type="submit" name="Submit" value=" OK " />
                    <input type="reset" name="Reset" value=" Clear " />
        </td>

        </form>
        <?php

        if(isset($_POST['Submit'])){
            
            
            function student($text1){
                
                $Square = text1;
                echo "สี่เหลี่ยมจตุรัส".$Square."<br>";
            }

        }

        
        
        $Square = $_POST['square'];
        $text1 = $_POST['text1'];
        $text2 = $_POST['text2'];

        student($Square,$Square1,$Square2);


        ?>
       

        

    </body>
</html>
