<?php
$user = 'Alexie';
$pagbati = 'Hello';

$offer = ['Biscoff Cups', 10, 50, 39];

$item = $offer[0];
$quantity = $offer[1];
$price = $offer[2];
$discounted = $offer[3];

$reg_price = $quantity * $price;
$offer_price = $quantity * $discounted;

$saving = $offer_price - $reg_price;

?>

<?php include 'header.php'?>

<!DOCTYPE html>
<head>
    <link href="styles.css" ref="stylesheet">
    <title>Hands On Test</title>
</head>
<body>
    <h2>MULTI-BUY OFFER</h2>
    <p><?= $pagbati?> <?= $user ?>!</p>
    <p>Purchase <strong><?= $quantity?></strong> packs of our special <strong><?= $item?></strong>!</p>
    <p>From the original price of P <?= number_format($reg_price, 0)?>, we are offerering it now for only P <?= number_format($offer_price, 0)?>.</p>
</body>

<?php include 'footer.php'?>
