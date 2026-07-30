<?php
$studentName = "S.M. SAIFUL ISLAM";
$studentID = "23-54495-3";

$choice = 4; 
$quantity = 15;

$foodItem = "";
$price = 0;

switch($choice) {
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;
    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;
    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;
    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;
    default:
        $foodItem = "Unknown";
        $price = 0;
}

$subtotal = $price * $quantity;

$discount = 0;
if ($subtotal >= 30) {
    $discount = 20;
} elseif ($subtotal >= 20) {
    $discount = 10;
} else {
    $discount = 0;
}

$discountAmt = ($subtotal * $discount) / 100;
$finalBill = $subtotal - $discountAmt;

echo "-------------------------------------<br>";
echo "-------------------------------------<br>";
echo "UNIVERSITY CAFETERIA<br>";
echo "-------------------------------------<br>";
echo "-------------------------------------<br><br>";

echo "Student Name : " . $studentName . "<br>";
echo "Student ID : " . $studentID . "<br><br>";

echo "Food Item : " . $foodItem . "<br>";
echo "Price : $" . $price . "<br>";
echo "Quantity : " . $quantity . "<br><br>";

echo "Ordered Items:<br>";
for ($i = 1; $i <= $quantity; $i++) {
    echo "Item " . $i . ": " . $foodItem . "<br>";
}

echo "<br>";
echo "Subtotal : $" . $subtotal . "<br>";
echo "Discount : " . $discount . "%<br>";
echo "Discount Amount : $" . $discountAmt . "<br>";
echo "Final Bill : $" . $finalBill . "<br><br>";

echo "Thank you for visiting! Don't forget to share your experience with us⭐<br>";
echo "-------------------------------------<br>";
echo "-------------------------------------<br>";
?>