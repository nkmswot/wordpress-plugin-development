<?php
//session start
session_start();

//session variable create
$_SESSION["result"]=$_POST['name'];

//redirect
header("Location:".$_POST['url']);
die();	

