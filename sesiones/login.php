<?php

session_start();

$users = [

    array(
        "username" => "Rita",
        "email" => "rita@noesmiemail.com"
    ),

    array(
        "username" => "Mr.Michi",
        "email" => "mrmichi@noesmiemail.com"
    ),

];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
