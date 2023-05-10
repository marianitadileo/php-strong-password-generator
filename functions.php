<?php 
$elements = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@%&-+*.;,";
$length = $_GET["length"];

if($length && is_numeric($length)) {
    for($i = 0; $i < $length; $i++) {
        $number = rand(0, strlen($elements));
        $password .= $elements[$number];
    }
}
?>