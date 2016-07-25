<?php
require("db.php");
ob_start();

check_access($_POST,'mode');
if(!isset($_POST['mode'])){
	$error = "Sorry You have no access permission to view this page";
	include('error.php');
    exit();
}
$mode = $_POST['mode'];

if($mode == 'setup'){
	//Data To Insert Into Db in Associative Array
	$data = array(
			'username' => $_POST['admin_username'],
			'password' => md5($_POST['admin_password']),
			'name'	   => $_POST['admin_name'],
			'email'		=> $_POST['admin_email'],
			'usertype'  => 'admin'

		);
	$run_query = insert('members',$data);
	if($run_query === TRUE){
	flash( 'info', 'Congratulations, You can now Login');
	header("location:../admin/login.php");
	}

}elseif($mode == 'login'){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$login = login($username,$password);
	flash( 'info', $login,'alert alert-danger');
	header("location:".last_location());
	
}elseif($mode == 'status'){
	$username = $_POST['username'];
	if(isset($_POST['status'])){
		$mode = 'status';
		$status = $_POST['status'];
	}elseif(isset($_POST['usertype'])){
		$mode = 'usertype';
		$status = $_POST['usertype'];
	}
	$data = array(
		$mode => $status
		);
	$update = update("members",$data,"username = '$username'");
	flash( 'info', "$username Modified Successfully");
	header("location:".last_location());

}elseif($mode == 'editprofile'){
	$username = $_POST['username'];
	$data = array(
		'password' => $_POST['password'],
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'phoneno' => $_POST['phoneno'],
		'location' => $_POST['location'],
		'biography' => $_POST['biography']
		);
	if(empty($_POST['password'])){
		unset($data['password']);
	}
	$update = update("members",$data,"username = '$username'");
	flash( 'info', "$username Modified Successfully");
	header("location:".last_location());
}elseif($mode == 'editthread'){
	$id = $_POST['id'];
	$data = array(
			'title' => $_POST['title'],
			'featured' => $_POST['featured'],
			'closed' => $_POST['closed'],
			'category_id'  => $_POST['category_id'],
			'status' => $_POST['status']

		);
	$update = update("threads",$data,"id = '$id'");
	flash( 'info', "Thread Modified Successfully");
	header("location:".last_location());
}elseif($mode == 'editcategory'){
	$id = $_POST['id'];
	$data = array(

		'name' => $_POST['name'],
		'slug' => $_POST['slug'],
		'parentid' => $_POST['parentid'],
		'status'  => $_POST['status']
		);
	$update = update("categories",$data,"id = '$id'");
	flash( 'info', "Category Modified Successfully");
	header("location:".last_location());
}elseif($mode == 'addcategory'){
	$data = array(

		'name' => $_POST['name'],
		'slug' => $_POST['slug'],
		'parentid' => $_POST['parentid'],
		'status'  => $_POST['status']
		);
	$insert = insert('categories',$data);
	flash( 'info', "Category Created Successfully");
	header("location:".last_location());
}elseif($mode == 'updatesetup'){
	$dbc->exec("UPDATE `config` SET `config_value`='$_POST[site_title]' WHERE config_name = 'site_title'");
	$dbc->exec("UPDATE `config` SET `config_value`='$_POST[site_timezone]' WHERE config_name = 'site_timezone'");
	$dbc->exec("UPDATE `config` SET `config_value`='$_POST[site_registration]' WHERE config_name = 'site_registration'");
	$query = $dbc->prepare("UPDATE `config` SET `config_value`=? WHERE config_name =?");
	$query->execute(array($_POST['thread_terms'],'thread_terms'));
	flash( 'info', "Settings Updated Successfully");
	header("location:".last_location());
}elseif($mode == 'editad'){
	$id = $_POST['id'];
	$query = $dbc->prepare("UPDATE `ads` SET `value`=?, `status`=? WHERE id = '$id'");
	$query->execute(array($_POST['value'],$_POST['status']));
	flash( 'info', "Ad Modified Successfully");
	header("location:".last_location());
}elseif($mode == 'signup'){
	$check = get_stats("members","username = '$_POST[username]'");
	if($check > 0){
	flash( 'info', "Username Already Exist");
	header("location:".last_location());
	exit();
	}
	$data = array(
		'name' => $_POST['name'],
		'password' => md5($_POST['password']),
		'username' => $_POST['username'],
		'email'  => $_POST['email'],
		'phoneno' => $_POST['phoneno'],
		'biography' => $_POST['bio'],
		'location' => $_POST['location'],
		'sex' => $_POST['sex'],
		'securityq' => $_POST['securityq'],
		'securitya' => strtolower($_POST['securitya']),
		'usertype' => 'member'
		);
	$insert = insert('members',$data);
	flash( 'info', 'Congratulations, You can now Login');
	header("location:../login.php");
	

}





























?>