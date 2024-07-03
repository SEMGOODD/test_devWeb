<?php
$string ="Welcome to the website";
echo $string;

echo "<br>";
echo strtolower($string);

echo "<br>";
echo strtoupper($string); 

echo "<br>";
echo strlen($string); 

echo "<br>";
echo $string[11];

echo "<br>";
echo str_replace("website", "PHP", $string);

echo "<br>";
echo substr($string, 0, 7);
?>