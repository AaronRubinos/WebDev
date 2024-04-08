<?php
##PHP functions

function message()  {
    echo "My First user define function";
}

message();  

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

##PHP function arguments

function studname($name) {
    echo "$name <br/>";
}

studname("Juan Dela Cruz");
studname("Laser Sabandal");
studname("DK Rodrigo");
studname("Aaron Monteberde");

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

##PHP Functions with Returning values

function addthis($num1, $num2, $num3)  {
    $sumis = $num1 + $num2 + $num3;
    return $sumis;
}

echo addthis(5, 2, 5);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



##PHP Arrays

$color = array("green", "white", "red");

echo count($color);
echo "<br/>";

echo "My favortie color are " .$color[0]." ".$color[1]." ".$color[2];
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$noarray = count($color);

for($x = 0; $x < $noarray; $x++) {
    echo $color[$x];
    echo "<br/>";
}

?>