<?php
$mydb = new mysqli('localhost', 'root', '123456', 'php_manual');


$file = fopen('langref.txt', 'r');
$arr  = [];
$i    = 0;
while (!feof($file)) {
    $arr[$i] = fgets($file);
    $i++;
}
fclose($file);
$arr    = array_filter($arr);
$values = '';

foreach ($arr as $key => $value) {
    $temp    = explode(" (", $value);
    $temp[1] = str_replace(")", "", $temp[1]);
    
    $values .= "('$temp[0]', '$temp[1]'), ";
}
$values = rtrim($values, ', ');
$sql    = "INSERT INTO php_index (title, link) VALUES $values";
if ($mydb->query($sql) == true) {
    echo "insert all line ok!" . "\n";
};
$mydb->close();
