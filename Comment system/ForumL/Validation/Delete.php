<?php

$mysql = new mysqli('localhost','root','','farum');


$id = $_GET['id'];

mysqli_query($mysql, "DELETE FROM `comments` WHERE `comments`.`id` = '$id'");


header('Location: /');