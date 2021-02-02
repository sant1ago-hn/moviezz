<?php
session_start();
unset($_SESSION['user']);

setcookie('username', null, time() - 86400);
setcookie('password', null, time() - 86400);
header("Location: index.php");