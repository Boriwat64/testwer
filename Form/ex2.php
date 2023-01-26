<html>
<head><title> การสร้างฟอร์ม </title></head>
    <body>
    <h2>Enter participants scores</h2>
        <form action="ex2.php" method="post" name="form1" id="form1">

            P1<input type="text1" maxlength="6" size="15" name="p[]" /><br />
            P2<input type="text1" maxlength="6" size="15" name="p[]" /><br />
            P3<input type="text1" maxlength="6" size="15" name="p[]" /><br />
            P4<input type="text1" maxlength="6" size="15" name="p[]" /><br />
            P5<input type="text1" maxlength="6" size="15" name="p[]" /><br />

            

        <td colspan="2" align="center">
                    <input type="submit" name="Submit" value=" Submit " />
                    <input type="reset" name="Reset" value=" Reset " />
        </td>

        </form>
        <?php

        if(isset($_POST['Submit'])){
            
            $p =$_POST['p'];
            
            $sum = 0 ;
            $countP = count($p);
            sort($p);
            rsort($p);
            echo"<br><br> Max of Min :";
            for($i=0;$i<$countP;$i++)
            {
                echo $p[$i].",";
                $sum= $sum+$p[$i];
            }


            echo "<br><br> Max :".$p[0];
            echo "<br><br>Min :".$p[$countP-1];
            echo "<br><br>som :".$sum;
        }
        echo "</td></td><table>";
    ?>
    </body>
</html>