<?php ob_start();
if (!isset($_GET['id']) and !isset($_GET['category'])) {
	require 'includes/db.php';
	$error = "No Thread Selected";
    include('includes/error.php');
    exit();
}
session_start();
if (!isset($_SESSION['usertype'])) {
	require 'includes/db.php';
	$error = "You are Not Logged In";
    include('includes/error.php');
    exit();
	}
?>
<?php
require ('includes/header.php');



?>
	<?php
	if(isset($_GET['id'])){
	$tdata = get_threads($_GET['id']);
	$tid = $tdata[0]['id'];
	$tcategory_id = $tdata[0]['category_id'];
	$tusername = $tdata[0]['user'];
	$tname = $tdata[0]['name'];
	$tcontent = $tdata[0]['content'];
	$tusertype = $tdata[0]['usertype'];
	$ttitle = $tdata[0]['title'];
	$tclosed = $tdata[0]['closed'];
	$tfeatured = $tdata[0]['featured'];
	$ttimecreated = $tdata[0]['timecreated'];
	$tstatus = $tdata[0]['status'];
	$tattachment1 = $tdata[0]['attachment'];
	$tattachment2 = $tdata[0]['attachment1'];
	$tattachment3 = $tdata[0]['attachment3'];
	$tattachment4 = $tdata[0]['attachment4'];
	if($tstatus != 'active'){
		header("location:index.php");
	}
	$cdata = get_categories($tcategory_id);
	$cname = $cdata[0]['name'];
	$cparentid = $cdata[0]['parentid'];
	$cstatus = $cdata[0]['status'];
	$cslug = $cdata[0]['slug'];
	if($cstatus == 'inactive'){
		header("location:index.php");
	}
	$mcdata = get_categories($cparentid);
	$mcname = $mcdata[0]['name'];
	$mcslug = $mcdata[0]['slug'];
	
	?>
<div class="col-lg-12 p">
<h3><b><?php echo $ttitle;?> - <?php echo $cname. "- "; ?> <?php echo $site_title;?></b></h3>
<a href="index.php"><?php echo $site_title ?></a> / <a href="category.php?c=<?php echo $mcslug;?>"><?php echo "$mcname</a>" ." / " ;?><?php echo  "<a href='category.php?c=$cslug'>$cname</a>" . " / ";?><?php echo "<a href='#'>$ttitle</a>"; ?>
</div>

</div><?php }?>
<div class="p">
	<h3><?php echo $site_title; ?> NEW THREAD</h3>
</div>
		<?php if (isset($_GET['c']) and !isset($_GET['modify'])) {
			require ('includes/edit.php');
		}elseif (isset($_GET['category'])) {
			require ('includes/new.php');
		}elseif (isset($_GET['modify'])) {
			require ('includes/modify.php');			
		 }?>
<?php require ("includes/bottombanner.php");?>
	

<?php require ('includes/footer.php');?>

</body>
</html>