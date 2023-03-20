<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
<center>
<table>
<h1>Input Bilangan</h1>
<br>
<br>
    <form action="" method="post">
        <tr>
            <td><label for="username">Bilangan 1 </label></td>
            <td><input type="number" name="bilangan1" ></td>
        </tr>
        <tr>
            <td><label for="password">Bilangan 2 </label></td>
            <td><input type="number" name="bilangan2" ></td>
        </tr>
        <tr>
            <td><label for="password">Bilangan 3 </label></td>
            <td><input type="number" name="bilangan3" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Input</button></td>
        </tr>
    </form>
</table>

<?php

if(isset($_POST["submit"])){

    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $bilangan3 = $_POST['bilangan3'];

    echo "Bilangan ke-1 : $bilangan1";
    echo "<br>";
    echo "Bilangan ke-2 : $bilangan2";
    echo "<br>";
    echo "Bilangan ke-3 : $bilangan3";
    echo "<br>";

if($bilangan1 > $bilangan2){
    if($bilangan2 > $bilangan3){
        $nilai_tengah = $bilangan2;
    }else if($bilangan1 > $bilangan3){
        $nilai_tengah = $bilangan3;
    }else{
        $nilai_tengah = $bilangan1;
    }
}else{
    if($bilangan1 > $bilangan3){
        $nilai_tengah = $bilangan1;
    }else if($bilangan2 > $bilangan3){
        $nilai_tengah = $bilangan3;
    }else{
        $nilai_tengah = $bilangan2;
    }
}

echo "Nilai tengahnya adalah: " . $nilai_tengah;

}
?>
</center>
</body>
</html>