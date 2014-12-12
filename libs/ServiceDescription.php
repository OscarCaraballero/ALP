<?php 
$piscina = "<p> Piscina: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";
$wifi = "<p> wifi: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";
$animales = "<p> animales: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";
$habitaciones = "<p> habitaciones: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.
Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>";

$i = $_POST["descripcion"];

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