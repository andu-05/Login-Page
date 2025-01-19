<?php

if ($_SERVER["REQUEST_MEHOD"] == "POST") {

    $username = htmlspecialchars($_POST["uname"]);
    $password = htmlspecialchars($_POST["passwd"]);

    echo "Your name is" $username "<br>";
    echo "password is" $passwd "<br>";
}