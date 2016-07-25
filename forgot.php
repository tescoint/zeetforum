<?php

require ('includes/db.php');

$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
ob_start();
if (isset($_SESSION['usertype'])) {

	header("location:index.php");
}

$mode = $_POST['mode'];
if ($mode== 'first') {
	$username = $_POST['username'];
	checkUsername($username);
}elseif ($mode == 'second') {
	$securitya = $_POST['securitya'];
	$id = $_SESSION['id'];
	securityVerify($securitya, $id);
}elseif ($mode == 'third') {
	$pass = $_POST['pass'];
	$id = $_SESSION['id'];
	changePass($pass,$id);
}

function checkUsername($username){
	global $dbc;
	$username = mysqli_real_escape_string($dbc,$username);
	$query = "SELECT * FROM members where username = '$username' ";
	$run_query = mysqli_query($dbc,$query);
	$count = mysqli_num_rows($run_query);
	if ($count < 1) {
		echo "<p class='alert alert-warning' role='alert'>Username Not Found In Our Database</p>";
	}else{
	$result = mysqli_fetch_assoc($run_query);
	$id = $result['id'];
	$_SESSION['id'] = "$id";
	$securityq = $result['securityq'];
		if ($run_query) {
		$query = "SELECT * FROM securityq where id = $securityq";
        $run_query = mysqli_query($dbc,$query);
        $security = mysqli_fetch_assoc($run_query);
        $securityquestion = $security['content']; 
        echo "$securityquestion";
		}
	}
	}
function securityVerify($securitya, $id){
	global $dbc;
	$securitya = mysqli_real_escape_string($dbc,$securitya);
	$id = mysqli_real_escape_string($dbc,$id);
	$securitya = strtolower($securitya);
	$query = "SELECT * FROM members where id = $id";
        $run_query = mysqli_query($dbc,$query);
        $security = mysqli_fetch_assoc($run_query);
        $securityans = $security['securitya'];
        if ($securitya == "$securityans") {
         	echo "True";
         } else{
         	echo "<p class='alert alert-warning' role='alert'>Security Answer Incorrect</p>";
         }
}


function changePass($pass,$id){
	global $dbc;
	$pass = mysqli_real_escape_string($dbc,$pass);
	$id = mysqli_real_escape_string($dbc,$id);
	$pass = md5($pass);
	$query = "UPDATE members set password = '$pass' where id = $id";
	$run_query = mysqli_query($dbc,$query);
	if ($run_query) {
		echo "<p class='alert alert-success' role='alert'>PasswordSuccessfully Changed You can now login with the new password by <a href='login.php'>clicking here</a></p>";
	}else{
		echo "Error Unable To Change Password ";
	}

}


?>