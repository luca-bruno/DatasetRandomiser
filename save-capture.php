<?php

$image = $_POST["image"];
$image = explode(";", $image) [1];
$image = explode(",", $image) [1];
$image = str_replace(" ", "+", $image);

$image = base64_decode($image);

$timestamp = $_POST["ts"];
// $date = date("d m Y G i s"); NOT USED ANYMORE
file_put_contents("uploads/" . $timestamp . ".png", $image);

echo "Done";

?>