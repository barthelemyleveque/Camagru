<?php

function    create_account()
{
    $login = $_POST["login"];
    $password = $_POST["password"];
    $password_check = $_POST["password"];
    $password = $_POST["password_check"];
}

if (isset($_POST["create_account"]))
    create_account();