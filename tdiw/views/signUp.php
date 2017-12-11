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
    <div class="form">
        <?php
        if(!$correctSignUp) {
            echo "<h2>Error validating your form!</h2>";
        }
        ?>
        <h2>Sign up:</h2>
        <form action="index.php?action=sign-up" method="post" name="signup">
            Name: <br>
            <input name="name" type="text" pattern="[a-zA-Z ]+" placeholder="Name" required><br><br>
            Password: <br>
            <input name="password" type="password" pattern="[a-zA-Z0-9]+" placeholder="Password" required><br><br>
            Email address: <br>
            <input name="email" type="email" placeholder="Email" required><br><br>
            Address: <br>
            <input name="address" type="text" placeholder="Address" maxlength="30" required><br><br>
            City: <br>
            <input name="city" type="text" placeholder="City" pattern="[a-zA-Z ]+" maxlength="30" required><br><br>
            Postal code: <br>
            <input name="postal_code" type="text" placeholder="Postal code" pattern="[0-9]{5}" maxlength="5" required><br><br><br>
            <input type="submit" name="submit" value="Create your account!"><br><br>
        </form>
    </div>
</section>

<?php
    include __DIR__.'/../views/footer.html';
?>


</body>
</html>