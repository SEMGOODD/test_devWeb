
<form action="arrays.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>
<?php
//$family = array("Father", "Mother", "Brother", "Sister");    
//$family1 = ["Father", "Mother", "Brother", "Sister"];
//echo $family[0];
//echo "<br>";
//echo $family1[0];

//associative arrays
$xname = $_GET["xname"];
$family = ["Father"=>"John", "Mother"=>"Mary", "Brother"=>"Tom"];
//echo $family[$xname];

$score = ["John" => ["15",'Good'],
          "Mary" => ["16", 'Very Good'],
          "Tom" => ["14", 'Good'] ];
echo "Score: " . $score[$xname][0];
echo "<br>";
echo "Grade: " . $score[$xname][1];
?>