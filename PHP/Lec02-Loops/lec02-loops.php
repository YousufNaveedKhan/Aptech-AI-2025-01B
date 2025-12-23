<?php
//  Pre Condition (Condition pehle ho or iteration baad mein ho)
// iteration ka count pta hota hai

for ($i = 1; $i <= 10; $i++) { 
    echo $i . "<br>";
}

echo "<br>";

$a = 1;

while ($a <= 10) {
    echo $a . "<br>";
    $a++; 

}
echo "<br>";
$b = 1;
do {
    echo $b . "<br>";
     $b++;

} while ($b <= 10);
?>