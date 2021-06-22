<!DOCTYPE html>
<html>
<head>
<title>page3</title>
</head>
<body>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <fieldset>
    
    <label for="page1">Page 3 [History]</label>
    <br><br>
    <label for="csite">Conversion Site</label>
    <br><br>
    <label>1.</label>
    <a href='page1.php '>Home </a>
    <label>2.</label>
    <a href='page2.php'>Conversion Rate </a>
    <label>3.</label>
    <a href='page3.php'>History </a>
   
    <br><br>
   

    <label for="value">Convetersion History:</label>
    <br>
    <input type="text" id="ch" >
<?php

$value = $number;

echo "Meters : ".($value*1000)."<br/>";
echo "Cm : ".($value*100)."<br/>";
echo "Foot : ".($value*3.28084)."<br/>";
echo "Inches : ".($value*39.3701)."<br/>";
?>
    <br><br>
   
    </fieldset>
    <br><br>
      
    </form>

    <br>

</body>
</html>