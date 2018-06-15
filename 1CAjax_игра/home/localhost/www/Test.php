<?php
$json = '{"a":64563,"b":23,"c":3453453,"d":12345678901234567890,"e":5}';
$obj = json_decode($json,false,512);
echo $obj->b;
?>