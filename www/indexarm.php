<?php {
//création des objets (katana, arrow,lancepierre)
require 'Arm.php';
$katana = new Arm("katana");
$arrow = new Arm("arrow");
$lancepierre = new Arm("lancepierre");
var_dump($katana, $arrow, $lancepierre);

}

?>
