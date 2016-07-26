<?php
if( !session_id() )
{
    session_start();
}
//This Will Handle All Errors In the App
set_exception_handler(function ($e) {
        // Processing only PDOExceptions
        if ($e instanceof PDOException) {
        	$error = $e->getMessage();
		    include('error.php');
		    exit();
        } else {
            throw $e;//do not process other exceptions
        }
    });



//Wanna Check If A user is logged in, if he is logged in, I initialize all of his data
if(isset($_SESSION['username'])){
	//Here Lies All the Details of the Logged in User
$udata = get_details($_SESSION['username']);
// print_r($udata);
$uid = $udata[0]['id'];
$uname = $udata[0]['name'];
$uusername = $udata[0]['username'];
$ubiography = $udata[0]['biography'];
$ulocation = $udata[0]['location'];
$uphoneno = $udata[0]['phoneno'];
$uemail  = $udata[0]['email'];
$usex    = $udata[0]['sex'];
$usecurityq = $udata[0]['securityq'];
$usecuritya = $udata[0]['securitya'];
$uusertype = $udata[0]['usertype'];

}
if($dbc !== NULL){
//Wanna Grab the Details of the Forum
if(check_setup_status() === TRUE){
	//Here Lies All the Details of the Forum
	$fdata = get_forum_details();
    $approve_thread = $fdata[0]['config_value'];
    $site_image = $fdata[1]['config_value'];
    $site_setup = $fdata[2]['config_value'];
    $thread_terms = $fdata[3]['config_value'];
    $site_title = $fdata[4]['config_value'];
    $site_timezone = $fdata[5]['config_value'];
    $site_registration = $fdata[6]['config_value'];
	// foreach($fdata as $data){
	//  $$data['config_name'] = $data['config_value'];
	// }
	 //print_r($fdata);
}
//Initializing The Timezone Here
date_default_timezone_set(get_timezone());
}
function run_query($query){

	global $dbc;
    $run_query = $dbc->query($query);
    //Next Grab Try to grab the required info and return 
    return $run_query->fetchAll(PDO::FETCH_ASSOC);   

}

function get_forum_details(){
	$data = run_query("SELECT * FROM config ORDER BY id ASC");
    // print_r($data);
	return $data;
}
function check_setup_status(){
	$data = get_forum_details();
	// print_r($data);die();
	if(is_array($data)){
		if($data[2]['config_value'] == 'completed'){
			return TRUE;
		}else{
			return FALSE;
		}
	}else{
		return $data;
	}
}

// function insert($table,$data){
// 	$columns = implode(", ",array_keys($data));
// 	$escaped_values = array_map('mysqli_real_escape_string', array_values($insData));
// 	$values  = implode(", ", $escaped_values);
// 	$sql = "INSERT INTO `fbdata`($columns) VALUES ($values)";
// }

function last_location(){
	if(isset($_SERVER['HTTP_REFERER'])){
		return $_SERVER['HTTP_REFERER'];
	}else{
		return '';
	}
	

}

function base_url(){

	// output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    $path = explode("/", $currentPath);
   	if(isset($path[2])){
   		if($path[2]=='includes' or $path[2]=='admin' ){
   			$currentPath = '/'.$path[1].'/index.php';
   		}
   	}
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';

    return $protocol.$hostName.$pathInfo['dirname']."/";

}

 function insert($table, array $data)
{
	global $dbc;
    /*
     * Check for input errors.
     */
    if(empty($data)) {
        throw new PDOException('Cannot insert an empty array.');
    }
    if(!is_string($table)) {
        throw new PDOException('Table name must be a string.');
    }

    $fields = '`' . implode('`, `', array_keys($data)) . '`';
    $placeholders = ':' . implode(', :', array_keys($data));
    $update = '';
    foreach(array_keys($data) as $udata){
    	$update .= "$udata=VALUES($udata),";
    }
    $update = rtrim($update, ',');
    // echo $update;
    //$update = '' . implode('='.':' . implode(', :', array_keys($data)) .', ', array_keys($data)) . '';
   // print_r($update);

    $sql = "INSERT INTO {$table} ($fields) VALUES ({$placeholders}) ON DUPLICATE KEY UPDATE $update";

    var_dump($sql);
    // die();
    // Prepare new statement
    $stmt = $dbc->prepare($sql);

    /*
     * Bind parameters into the query.
     *
     * We need to pass the value by reference as the PDO::bindParam method uses
     * that same reference.
     */
    foreach($data as $placeholder => &$value) {

        // Prefix the placeholder with the identifier
        $placeholder = ':' . $placeholder;

        // Bind the parameter.
        $stmt->bindParam($placeholder, $value);

    }

    /*
     * Check if the query was executed. This does not check if any data was actually
     * inserted as MySQL can be set to discard errors silently.
     */
    if(!$stmt->execute()) {
        throw new PDOException('Could not execute query');
    }

    /*
     * Check if any rows was actually inserted.
     */
    // if($stmt->rowCount() == 0) {

    //     //var_dump($dbc->errorCode());

    //     throw new PDOException('Could not insert data into users table.');
    // }
    if($_POST['mode'] == 'setup'){
    $dbc->exec("UPDATE `config` SET `config_value`='$_POST[site_name]' WHERE config_name = 'site_title'");
    $dbc->exec("UPDATE `config` SET `config_value`='completed' WHERE config_name = 'site_setup'");

	}
    return true;

}

     
/**
 * Function to create and display error and success messages
 * @access public
 * @param string session name
 * @param string message
 * @param string display class
 * @return string message
 */
function flash( $name = '', $message = '', $class = 'alert alert-success' )
{
    //We can only do something if the name isn't empty
    if( !empty( $name ) )
    {
        //No message, create it
        if( !empty( $message ) && empty( $_SESSION[$name] ) )
        {
            if( !empty( $_SESSION[$name] ) )
            {
                unset( $_SESSION[$name] );
            }
            if( !empty( $_SESSION[$name.'_class'] ) )
            {
                unset( $_SESSION[$name.'_class'] );
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }
        //Message exists, display it
        elseif( !empty( $_SESSION[$name] ) && empty( $message ) )
        {
            $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
            echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}

function check_access($type,$param = ''){
	if($type == 'admin' and isset($_SESSION['usertype'])){
		if($_SESSION['usertype'] == 'member' or $_SESSION['usertype'] == 'vip' or empty($_SESSION['usertype'])){
			$error = "Sorry You have no permission to access this page";
			include('error.php');
		    exit();
		}
	}elseif($type == 'admin' and !isset($_SESSION['usertype'])){
		header("location:../admin/login.php");
		exit();
	}elseif(!isset($type[$param])){ 
	$error = "Sorry You have no permission to access this page";
	include('error.php');
    exit();
	}
	return TRUE;

}

function login($username,$password){
	global $dbc;
	$query = $dbc->prepare("SELECT * FROM members WHERE username=:username AND password=:password");
	$query->execute(array(':username' => $username, ':password' => $password));
	$row_count = $query->rowCount();
	if($row_count < 1){
		
		return "Wrong Username or Password";
	}
	$data = $query->fetchAll(PDO::FETCH_ASSOC);
	if($data[0]['status'] != 'active'){
		return "Your account has been deactivated till further notice";
	}
	//Change THe users Status to Online
	available_status($data[0]['username'],'1');
	$_SESSION['usertype'] = $data[0]['usertype'];
	$_SESSION['username'] = $data[0]['username'];
	if($_SESSION['usertype'] == 'admin'){
		header("location:../admin/index.php");
	}else{
		header("location:../index.php");
	}
	exit();
	 //print_r($data);die();
 
}

function available_status($username,$status){
	global $dbc;
	return $dbc->exec("UPDATE `members` SET `available`='$status' WHERE username = '$username'");
}

function get_details($username){
	global $dbc;
	$query = $dbc->prepare("SELECT * FROM members WHERE username=:username");
	$query->execute(array(':username' => $username));
	return $data = $query->fetchAll(PDO::FETCH_ASSOC);
}

function get_timezone(){
	$data = run_query("SELECT * FROM config where config_name = 'site_timezone'");
	
		return $data[0]['config_value'];
	
}

function get_stats($table,$where = NULL){
	global $dbc;
    if($where === NULL){
        $query = $dbc->query("SELECT * FROM $table");
    }else{
        $query = $dbc->query("SELECT * FROM $table WHERE $where ");
    }
	return $row_count = $query->rowCount();
}

function latest($table,$where = null){
    if($where === null){
        return $query = run_query("SELECT * FROM $table ORDER BY id DESC LIMIT 5");
    }else{
        return $query = run_query("SELECT * FROM $table WHERE $where ORDER BY id DESC LIMIT 5");
    }
    

}

function update($table,array $data,$where){
    global $dbc;
    if(empty($data)) {
        throw new PDOException('Cannot update an empty array.');
    }
    if(!is_string($table)) {
        throw new PDOException('Table name must be a string.');
    }

    $fields = '`' . implode('`, `', array_keys($data)) . '`';
    $placeholders = ':' . implode(', :', array_keys($data));
    $update = '';
    foreach(array_keys($data) as $udata){
        $update .= "$udata=:$udata,";
    }
    $update = rtrim($update, ',');

    $sql = "UPDATE  {$table} set $update WHERE $where";

    var_dump($sql);
     // die();
    // Prepare new statement
    $stmt = $dbc->prepare($sql);

    /*
     * Bind parameters into the query.
     *
     * We need to pass the value by reference as the PDO::bindParam method uses
     * that same reference.
     */
    foreach($data as $placeholder => &$value) {

        // Prefix the placeholder with the identifier
        $placeholder = ':' . $placeholder;

        // Bind the parameter.
        $stmt->bindParam($placeholder, $value);

    }

    /*
     * Check if the query was executed. This does not check if any data was actually
     * inserted as MySQL can be set to discard errors silently.
     */
    if(!$stmt->execute()) {
        throw new PDOException('Could not execute query');
    }

    /*
     * Check if any rows was actually inserted.
     */
    // if($stmt->rowCount() == 0) {

    //     var_dump($dbc->errorCode());

    //     throw new PDOException('Could not insert data into $table table.');
    // }

    return TRUE;


}

    function get_badge($usertype){

        if($usertype == 'member'){
            return '';
        }else{
           echo "<center><img width='300px' height='300px' src='".base_url()."img/$usertype.png' /></center>";
        }
    }

    function get_icon($usertype){
        if($usertype == 'member'){
            return '';
        }else{
           echo "<img src='".base_url()."img/i$usertype.png' />";
        }
    }

    function get_users(){
        return $query = run_query("SELECT * FROM members");
        
    }

    function get_threads($id = NULL){
        if($id === NULL){
        return $query = run_query("SELECT threads.*, members.name, members.username FROM threads LEFT JOIN members on threads.user = members.username ORDER BY id DESC");
        }else{
        return $query = run_query("SELECT threads.*, members.name, members.username, members.usertype FROM threads LEFT JOIN members on threads.user = members.username WHERE threads.id = '$id' ORDER BY threads.id DESC");
        }
        
    }

    function get_categories($id = NULL){

        if($id === NULL){
        return $query = run_query("SELECT * FROM categories");
        }elseif($id === 'main'){
            return $query = run_query("SELECT * FROM categories where parentid = 0 and status = 'active'");
        }else{
        return $query = run_query("SELECT * FROM categories where id = '$id' or slug = '$id' ");
            }
    }




    function grab_ads($id = NULL){
        if($id === NULL){
            return $query = run_query("SELECT * FROM ads");
        }else{
            return $query = run_query("SELECT * FROM ads where id = '$id'");
        }
    }

    function last_replier($id){
	$query = run_query("SELECT * FROM comments INNER JOIN members on comments.user=members.username where postid = $id ORDER BY comments.id DESC LIMIT 1");
	if(empty($query)){
	return "No Reply Yet";	
	}else{
	return $query[0]['username'];
	}
	
}













?>
