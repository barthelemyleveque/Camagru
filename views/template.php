<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $t?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <script src="main.js"></script>
</head>
<header class="header">
    <a href="<?= URL?>" ><img class="imgleft" src="img/logo.png" title="Home"></a>
    <div class="header-right">
    <a class="active" href="account_creation.php">Create an Account</a>
    <a href="#contact">What is Camagru ?</a>
    <a href="#about">Homepage</a>
    </div>
</header>
<?= $content?>
<footer class="footer">
     <p> Footer</p>
</footer>
</html>