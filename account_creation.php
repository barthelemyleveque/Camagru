<?php

include "db_tools.php"
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Camagru 📷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <script src="main.js"></script>
</head>
<body>
<div>
<a href="index.php" ><img class="imgleft" src="img/logo.png" title="Home"></a>
</div>
<div class="header">
    <div class="header-right">
    <a class="active" href="account_creation.php">Create an Account</a>
    <a href="#contact">What is Camagru ?</a>
    <a href="#about">Homepage</a>
    </div>
</div>
<div class="wrapper">
    <div id="title">CAMAGRU 📷</div>
    <div id="container">
			<form action="create_account()" method=POST>
				<label for="username">Login:</label><BR \>
                <input type="text" id="login" name="login">
                <div id="guidance"> Login must be of alphanumerical characters, and <= 10 chars. </div><BR \>
				<label for="username">E-mail address :</label><BR \>
				<input type="text" id="email" name="email">
                <div id="guidance"> Must be an unique and valid e-mail address. </div><BR \>
				<label for="password">Password :</label><BR \>
                <input type="password" id="password" name="password"><BR \>
                <label for="password">Repeat password : </label><BR \>
				<input type="password" id="password" name="password">
                <div id="guidance"> Must be at least 8 characters long, with at least one number and at least one special character (?#!@.,)</div><BR \>
				<div id="lower">
					<input type="submit" value="Create an Account" name="create_account">
				</div>
                <BR \>
			    </div>
			</form>
    </div>
</div>
<div class="footer">
     <p> Footer</p>
</div>

</body>
</html>