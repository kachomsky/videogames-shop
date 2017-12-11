<header>
    <h1>Dreamstore</h1>
    <a class="login" href="index.php?action=sign-up"><img src="views/resources/img/signup.png" ></a>
    <?php
    if(isset($_SESSION['email'])){ ?>
        <div class="login">
            <img id="menuProfile" src="views/resources/img/logged.png" >
            <ul class="userMenu">
                <li><a href="#">El meu compte.</a></li><br/>
                <li><a href="#">Les meves compres.</a></li><br/>
                <li><a href="index.php?action=log-out">Tancar sessió.</a></li><br/>
            </ul>
        </div>
        <span id="cart" class="login" href=""><img src="views/resources/img/cart.png" ></span>
        <!-- ****************************-->

        <?php
    }else {
        ?>
        <a class="login" href="index.php?action=sign-in"><img src="views/resources/img/login.png" ></a>
        <?php
    }
    ?>
    <img src="views/resources/img/logo.png" class="logo"/><br>
	
	<span>Best entertainment at the best price</span>
	<nav>
        <div class="login" id="menuCartProducts"></div>
		<ul>
			<li><a class="homeButton" href="index.php"><img src="views/resources/img/home.png"></a></li>
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