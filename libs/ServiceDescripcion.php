<?php 
$piscina = "<p> Piscina: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";
$wifi = "<p> wifi: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";
$animales = "<p> animales: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";
$habitaciones = "<p> habitaciones: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";

//$myarray = [$_POST["descripcion"]];
//$myText = (string)$myarray[0];
//echo $myText;
//$name = "WiFi";
//if(isset($_POST['descripcion'])){ $name = $_POST['descripcion']; } 

switch ($_POST['descripcion']) {
    case "Piscina":
        echo $piscina;
        break;
    case "WiFi":
        echo $wifi;
        break;
    case "Animales":
        echo $animales;
        break;
    case "Servicio de habitaciones":
        echo $habitaciones;
        break;
//echo $_POST["descripcion"];
}

?>

