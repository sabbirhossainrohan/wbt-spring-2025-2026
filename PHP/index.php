<?php
echo " Area & Perimeter of Rectangle";

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area = $area<br>";
echo "Perimeter = $perimeter<br>";
?>

<?php
echo " VAT Calculation (15%)";

$amount = 1000;
$vat = 0.15 * $amount;

echo "VAT = $vat<br>";
echo "Total Amount = " . ($amount + $vat) . "<br>";
?>

<?php
echo " Odd or Even Number";

$num = 7;

if ($num % 2 == 0) {
    echo "$num is Even";
} else {
    echo "$num is Odd";
}

echo "<br>";
?>


<?php
echo " Largest of Three Numbers";

$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Largest = $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b";
} else {
    echo "Largest = $c";
}

echo "<br>";
?>


<?php
echo " Odd Numbers Between 10 to 100";

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br>";
?>


<?php
echo " Search Element in Array";

$arr = [10, 20, 30, 40, 50];
$search = 50;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element found";
} else {
    echo "Element not found";
}

echo "<br>";
?>


<?php
echo "Star Pattern";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>

<?php
echo "Number Pattern";

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}


?>

<?php
echo " Alphabet Pattern";

$ch = 'A';

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}


?>