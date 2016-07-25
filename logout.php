<?php
require ('includes/db.php');

available_status($username,0);

session_unset();
session_destroy();
header("location:index.php");




?>