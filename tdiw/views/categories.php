<!DOCTYPE html>
<html>
<?php
	include __DIR__.'/../views/head.html';
?>
<body>

	<?php
		include __DIR__.'/../views/header.php';
	?>

	<section class="categories">
		<h2>Categories:</h2>

        <?php foreach ($categories as $index => $category): ?>
        <div class="categoryContainer">
            <a class="showProducts"> <!-- href="index.php?action=list-products"-->
                <h3><?php echo $category['name'] ?></h3>
                <div class="Category" id="category<?php echo $index+1;?>" data-value="<?php echo $category['id']; ?>">
                    <img class="iconCategory" src="<?php echo __IMG_REL_PATH__.$category['image']; ?>" />
                </div>
            </a>
            <p><?php echo $category['description']?></p>
        </div>
        <?php endforeach; ?>
	</section>

    <section id="products"></section>
	
    <?php
	include __DIR__.'/../views/footer.html';
	?>

</body>
</html>