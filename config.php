<?php

header('Content-Type:text/html; charset=utf-8');

$host='localhost';
$user='root';
$pass='vertrigo';
$db='accedental';

$con=  mysqli_connect($host, $user, $pass, $db);