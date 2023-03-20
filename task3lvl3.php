<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 3</title>
</head>
<body>
  <center>

  <h1>Input Sisi</h1>

  <form action="" method="post">
    <label for="a">Sisi-1:</label>
    <input type="number" id="a" name="a"><br>

    <label for="b">Sisi-2:</label>
    <input type="number" id="b" name="b"><br>

    <label for="c">Sisi-3:</label>
    <input type="number" id="c" name="c"><br>

    <input type="submit" value="Submit" name="submit">
  </form>

<?php

if(isset($_POST["submit"])){
$sisi1 = $_POST["a"];
$sisi2 = $_POST["b"];
$sisi3 = $_POST["c"];

if($sisi1 == $sisi2 && $sisi2 == $sisi3){
    echo "SAMA SISI!";
}else if($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3){
    echo "SAMA KAKI!";
}else{
    echo "SEMBARANG!";
}
}
?>
  </center>
</body>
</html>