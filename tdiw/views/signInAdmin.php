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
    <?php if($error){echo "<h2>Error, email or password not correct!</h2>";}?>
    <?php if(!$logged): ?>
    <div class="form">
        <h2>Administration log in:</h2>
        <form action="index.php?action=admin-sign-in" method="post" name="signin">
            Email: <br>
            <input name="email" type="email" placeholder="Email" required><br><br>
            Password: <br>
            <input name="password" type="password" pattern="[a-zA-Z0-9]+" placeholder="Password" required><br><br><br>
            <input type="submit" value="Log in!"><br><br>
        </form>
    </div>
    <?php endif ?>
    <?php if($logged){echo "<h2>Logged correctly ".$_SESSION['email']."!</h2>";} ?>
</section>

<?php
    include __DIR__.'/../views/footer.html';
?>

</body>
</html>