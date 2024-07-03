<?php
$title = 'Testing php';
$name = "Ayoub SEMGAT";
$num = 22;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
<?php
$var1 ="Ayoub";
$var2 = "SEMGAT";
echo "<h1> $name <h1>";
echo"<h3> $num <h3>";

function makeCoffee
( $type = "frappe", $milk = true ) {
$str = "Making a cup Coffe of type ".$type;
if ( $milk ) {
$str = $str." with milk";
}
$str .= ".\n";
return $str;
}
echo makeCoffee( "Arabic");
?>
</body>
</html>

