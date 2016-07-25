<?php
session_start();
if(!isset($_GET['u']) and !isset($_SESSION['username'])){
  require 'includes/db.php';
  check_access($_SESSION,"usertype");
}
require ('includes/header.php');

if (!isset($_GET['u'])) {
  $u = $uusername;
}else{
  $u = $_GET['u'];
}

$pdata = get_details($u);
if(empty($pdata)){
   $error = "This User Does not exist";
    include('includes/error.php');
    exit();
}
$pid = $pdata[0]['id'];
$pname = $pdata[0]['name'];
$pusername = $pdata[0]['username'];
$pbiography = $pdata[0]['biography'];
$plocation = $pdata[0]['location'];
$pphoneno = $pdata[0]['phoneno'];
$pemail  = $pdata[0]['email'];
$psex    = $pdata[0]['sex'];
$psecurityq = $pdata[0]['securityq'];
$psecuritya = $pdata[0]['securitya'];
$pusertype = $pdata[0]['usertype'];
$pstatus = $pdata[0]['status'];
$pavailable = $pdata[0]['available'];
?>
<div class="col-lg-12">
<div class="p">
<p>
  <h1>VIEW YOUR PROFILE</h1>
  
            </p>
    <a href="index.php"><?php echo $site_title; ?></a> / <a href="profile.php">Your Profile</a>
</div>
<div class="row border" id="content">
    <?php
    $tcount = get_stats("threads","user = '$pusername' and status = 'active'");   
    ?>
	<b>Your Latest Threads</b> (<?php echo $tcount;?> Threads)
  <?php
  if (isset($_SESSION['usertype']) and $pusername == $uusername) {?>
    <a href="editprofile.php?u=<?php echo $pusername;?>" class="btn btn-info">Edit Your Profile</a>
    
 <?php }elseif(isset($_SESSION['usertype']) and $uusertype != 'vip' and $uusertype != 'member'){?>
    <a href="admin/index.php?page=profile&u=<?php echo $pusername;?>" class="btn btn-info">Manage Profile</a>
 <?php }
  ?>
	<div class="col-lg-12">
		<ul>
		<?php

    $latests = latest('threads',"user = '$pusername' and status = 'active'");
    foreach($latests as $latest){?>
      <a href="thread.php?id=<?php echo $latest['id'];?>"><li>&lArr; <?php echo $latest['title'];?> &rArr; </li></a>
    <?php }
		?>
			
		</ul>
    

    <p class='border'>Username: <?php echo $pusername;?><span><?php get_icon($pusertype);?></span></p>
    <p class='border'>Biography: <?php echo $pbiography;?></p>
    <p class='border'>Location: <?php echo $plocation;?></p>
<div class="">
<?php get_badge($pusertype); ?>
</div>
	</div>

</div>


<?php require ("includes/bottombanner.php");?>


<?php require ('includes/footer.php');?>




</div>

</body>