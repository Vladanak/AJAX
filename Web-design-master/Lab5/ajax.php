<?php 
require_once "Dklab/Realplexor.php";
$rpl = new Dklab_Realplexor("127.0.0.1", "10010", "demo_");
// Send data to channels. 
$rpl->send(array("Alpha", "Beta"), $_POST['message']);
?>