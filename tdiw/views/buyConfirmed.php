<!DOCTYPE html>
<html>
<?php
include __DIR__.'/../views/head.html';
?>
<body>

<?php
include __DIR__.'/../views/header.php';
?>

<section>
    <h1>Your purchase has been made correctly!</h1>
    <?php foreach($buyConfirmed as $product): ?>
        <p>Product: <?php echo $product['name']; ?></p>
        <p>Unitary Price: <?php echo $product['price']; echo "&euro;" ?></p>
        <p>Quantity: <?php echo $product['quantity']; ?></p>
        <p>Total Price: <?php echo $product['totalPrice']; echo "&euro;" ?></p>
        <hr/>
    <?php endforeach; ?>
    <h3><p>Products quantity: <?php echo $totalItems; ?></p></h3>
    <h3><p>Buy total price: <?php echo $totalPriceCart; echo "&euro;" ?></p></h3>

    <a href="index.php">Go home!</a>
</section>

<?php
include __DIR__.'/../views/footer.html';
?>

</body>
</html>