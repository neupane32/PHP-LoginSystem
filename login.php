<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="css/signup-login.css">
<section class="login-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields !</p>";
        } else if ($_GET["error"] == "wrongLogin") {
            echo "<p>Incorrect login information !</p>";
        }
    }
    ?>
</section>

<?php
include_once 'footer.php';
?>
