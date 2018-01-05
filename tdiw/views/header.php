<header>
    <a id="ImageLogo" href="index.php"><h1>Dreamstore</h1></a>
    <a class="login" href="index.php?action=sign-up"><img src="<?php echo __IMG_REL_PATH__?>signup.png" ></a>
    <?php
    if(isset($_SESSION['user'])){ ?>
        <div class="login">
            <img id="menuProfile" src="<?php echo __IMG_REL_PATH__?>logged.png" >
            <ul class="userMenu">
                <li><a href="#">My account.</a></li><br/>
                <li><a href="index.php?action=user-commands">My commands.</a></li><br/>
                <li><a href="index.php?action=log-out">Logout.</a></li><br/>
            </ul>
        </div>
        <span id="cart" class="login" href=""><img src="<?php echo __IMG_REL_PATH__?>cart.png" ></span>
        <!-- ****************************-->
    <?php }else if(isset($_SESSION['admin'])){ ?>
        <div class="login">
            <img id="menuProfile" src="<?php echo __IMG_REL_PATH__?>logged.png" >
            <ul class="userMenu">
                <li><a href="index.php?action=admin-commands">List of commands.</a></li><br/>
                <li><a href="index.php?action=admin-list-products">List of products.</a></li><br/>
                <li><a href="index.php?action=admin-add-product">Add product.</a></li><br/>
                <li><a href="index.php?action=admin-logout">Logout.</a></li><br/>
            </ul>
        </div>
        <?php
    }else {
        ?>
        <a class="login" href="index.php?action=sign-in"><img src="<?php echo __IMG_REL_PATH__?>login.png" ></a>
        <?php
    }
    ?>
    <img src="<?php echo __IMG_REL_PATH__?>logo.png" class="logo"/><br>

	<span>Best entertainment at the best price</span>
	<nav>
        <div class="login" id="menuCartProducts"></div>
		<ul>
			<li><a class="homeButton" href="index.php"><img src="<?php echo __IMG_REL_PATH__?>home.png"></a></li>
			<li><a href="#">Everything</a></li>
			<li><a href="#">Games</a>
				<ul>
					<li><a href="#">Rol</a></li>
					<li><a href="#">Shooter</a></li>
					<li><a href="#">Action</a></li>
					<li><a href="#">Horror</a></li>
				</ul>
			</li>
			<li><a href="#">Movies</a>
				<ul>
					<li><a href="#">Action</a></li>
					<li><a href="#">Drama</a></li>
					<li><a href="#">Horror</a></li>
					<li><a href="#">Comedy</a></li>
				</ul>
			</li>
			<li><a href="#">Books</a>
				<ul>
					<li><a href="#">Fantasy</a></li>
					<li><a href="#">Tragedy</a></li>
					<li><a href="#">Comedy</a></li>
					<li><a href="#">Romance</a></li>
					<li><a href="#">Satire</a></li>
				</ul>
			</li>
			<li><a href="#">Special Offers</a></li>
		</ul>
	</nav>
</header>