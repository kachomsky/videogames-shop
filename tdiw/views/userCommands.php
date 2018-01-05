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
    <h2>List of commands:</h2>
    <?php foreach($commands as $command): ?>
        <p>Product name: <?php echo $command['product_name']; ?></p>
        <p>Date: <?php echo $command['date']; ?></p>
        <p>Quantity: <?php echo $command['quantity']; ?></p>
        <p>Unitary Price: <?php echo $command['unitary_price']; echo "&euro;" ?></p>
        <p>Total Price: <?php echo $command['total_price']; echo "&euro;" ?></p>
        <hr/>
    <?php endforeach; ?>
</section>

<?php
include __DIR__.'/../views/footer.html';
?>

</body>
</html>