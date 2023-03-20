<?php 

$bilangan1 = 10;
$bilangan2 = 30;
$bilangan3 = 20;

if($bilangan1 > $bilangan2){
    echo $bilangan1;
}elseif ($bilangan1 > $bilangan3){
    echo $bilangan1;
}elseif ($bilangan2 > $bilangan3){
    echo $bilangan2;
}elseif ($bilangan2 < $bilangan3){
    echo $bilangan3;
}

?>