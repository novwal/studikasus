<?php
$bilangan1 = 56;
$bilangan2 = 24;
$bilangan3 = 23;
$bilangan4 = 34;


$terbesar = $bilangan1;
if ($bilangan2 > $terbesar){
    $terbesar = $bilangan2;
}
if ($bilangan3 > $terbesar){
    $terbesar = $bilangan3;
}
if ($bilangan4 > $terbesar){
    $terbesar = $bilangan4;
}

echo $terbesar;

?>