<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New PHP Page</title>
</head>

<body>
    <form action="index.php" method="get">
        <label>Please select an amount: </label><br>
        <input type="text" name="quantity" max="99" min="1" required>
        <input type="submit" value="total">
    </form>
</body>
<?php
//$item and $price can be changed to whatever you like 
//The isset checks if "quantity" has been submitted through the form, which it has, so it wont show any warnings regarding it
$item = "Items";
$price = 2.99;
$quantity = isset($_GET["quantity"]) ? $_GET["quantity"] : null;

$total = null;
$total = $quantity * $price;


if ($quantity >= 1 && $quantity <= 99) {
    echo "You have ordered {$quantity} {$item}\s<br>";
} elseif ($quantity >= 100) {
    echo "Sorry, we cannot process more than 99 {$item}s<br>";
    $total = null;
} else {
    echo "Really?<br>";
    $total = null;
}

echo "Your total is: \${$total}";

?>

</html>