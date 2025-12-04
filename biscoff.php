<?php 
$user = 'Alexie';
$greet = 'Hello';

if ($user == ''){
    $greet = "No user?";
} else {
    $greet = "Welcome back, " . $user . "!";
}

$product = 'Biscoff Cups';
$cost = 10;
$total = array();

for ($counter = 1; $counter <= 15; $counter++) {
    $subtotal = $cost * $counter;
    $discount = ($cost / 100) * ($counter * 4);
    $totals[$counter] = $subtotal - $discount;
}

?>

<?php include 'header.php'?>
<!DOCTYPE html>
<body>
    <p><?= $greet ?></p>
    <h2>DISCOUNTS</h2>
    <h2>Product: <?= $product ?></h2>
    <div class ="content">
        <table>
            <tr>
                <th>PACKS</th>
                <th>PRICE</th>
            </tr>

            <?php foreach ($totals as $quantity => $price) {?>
            <tr>
            <td><?php echo $quantity; ?> <?php echo ($quantity == 1) ? 'pack' : 'packs' ; ?></td>
            <td>P <?php echo number_format($price, 2); ?></td>
            </tr>
        <?php } ?>
        </table>
    </div>

</body>
</html>
