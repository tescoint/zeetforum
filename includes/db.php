<?php
ini_set('display_errors', 'on');
//HERE AM GONNA BE DECLARING THE CONSTANT FOR THE DB USER,HOST,PASSWORD AND TABLENAME
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); //Enter your database username here
define('DB_PASS', 'root'); //Enter your database ppassword here
define('DB_NAME', 'zeetforum'); //Enter the name of the database you created here, make sure you have import the provided sql
 //error_reporting(0);
if(empty(DB_NAME)){
	die("You Need to Insert The name of the database you created  in includes/db.php for the application to work. Make Sure You have import the the sql located in /sql folder. if not the application won't work. Thanks Tes Sal");
}

//-----------------------------Do Not Edit Beyond This line----------------------------------------------------//
				//NEXT HERE I AM TRYING TO CONNECT TO THE DATABASE USING THE ABOVE INFORMATION

try {
	$dbc = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4", DB_USER, DB_PASS);
	$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    $error = $ex->getMessage();
    require 'functions.php';
    include('error.php');
    exit();
}

require 'functions.php';




?>