<?php
include_once 'header.php';

?>
<link rel="stylesheet" href="css/signup-login.css">
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
    <input type="text" name="name" placeholder="Fullname...">
    <input type="text" name="email" placeholder="Email...">
    <input type="text" name="uid" placeholder="Username...">
    <input type="password" name="pwd" placeholder="password...">
    <input type="password" name="pwdrepeat" placeholder="Repeat password...">

    <button type="submit" name="submit">Sign Up</button>
    </form>

<?php
include_once 'footer.php';


?>