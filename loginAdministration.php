<?php 
	session_start(); 
	if ($_SESSION["auth"]==TRUE)
		header("Location:erreur.php");
?>


<!DOCTYPE html>
<html>
    <body>
        <form action="loginAdministrationBack.php" method="post">
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">

            <button type="submit">Login</button>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        </form> 
    <body>
</html>
