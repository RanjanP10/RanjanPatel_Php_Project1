<?php
// Ranjan Patel * 8622791
require('header.php');// add header file where i put navigation bar 
session_start();
$_SESSION['userid']='';
$_SESSION['PID'] = '';
header('location:index.php');
?>