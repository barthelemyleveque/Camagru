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
    <div class="slider">
        <img class="mySlides" src="img/welcome1.jpg">
        <img class="mySlides" src="img/welcome2.jpg">
        <img class="mySlides" src="img/welcome3.jpg">
        <img class="mySlides" src="img/welcome4.jpg">
        <script src="main.js"></script>
    </div>
    <BR \><BR \>
    <div id="container">
			<form action="login.php" method=POST>
				<label for="username">E-mail adress :</label><BR \>
				<input type="text" id="username" name="username"><BR \>
				<label for="password">Password : </label><BR \>
				<input type="password" id="password" name="password">
				<div id="lower">
					<input type="submit" value="Login">
				</div>
				<div id="options">
                <BR \>
			<a href="#forgot"> Forgot password ?</a></p>
			<a href="account_creation.php"> Not registered yet ? Create an account !</a></p>
			    </div>
			</form>
    </div>
</div>
<div class="footer">
     <p> Footer</p>
</div>

</body>
</html>