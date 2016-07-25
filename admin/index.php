<?php
require('../includes/admin_header.php');
if(!isset($_GET['page'])){
	$page = 'dashboard';
}else{
	$page = $_GET['page'];
}

if($page == 'dashboard'){
	require 'dashboard.php';
}elseif($page == 'profile'){
	require 'profile.php';
}elseif($page == 'viewusers'){
	require 'view_users.php';
}elseif($page == 'viewthreads'){
	require 'view_threads.php';
}elseif($page == 'viewcategories'){
	require 'view_categories.php';
}elseif($page == 'setup'){
	require 'view_setup.php';
}elseif($page == 'ads'){
	require 'ads.php';
}





 require '../includes/admin_footer.php'; ?>