<?php 
$piscina = "view/img/piscina.jpg";
$wifi = "view/img/wifi.jpg";
$animales = "view/img/animales.png";
$habitaciones = "view/img/habitaciones.jpg";

$i = $_POST["foto"];

switch ($i) {
    case 1:
        echo $piscina;
        break;
    case 2:
        echo $wifi;
        break;
    case 3:
        echo $animales;
        break;
    case 4:
        echo $habitaciones;
        break;
}
?>

