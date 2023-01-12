<html>
<head><title>แสดงการใช้งาน if-else แบบ Nested </title>
</head>
<body>
<?php
        $a = 76; $b = 16; $c = 56;
        $min = 0;
        if ($a > $b) {

            if ($a > $c) $mag = $a;
            else $mag = $c;
        }
        else {
        
            if ($b > $c) $mag = $b;
            else $mag = $c;
        
        }
        echo "Three Number : <b>$a, $b, $c </b><br/>";
        echo "Min value : <b>$mag </b><br/>";
?>
</body>
</html>