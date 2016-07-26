<?php ob_start();
if (!isset($_GET['id'])) {
	require 'includes/db.php';
	$error = "No Post Selected";
    include('includes/error.php');
    exit();
}
require ('includes/header.php');

?>


		<?php
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
	if($tcategory_id > 0){
	$cdata = get_categories($tcategory_id);
	$cname = $cdata[0]['name'];
	$cparentid = $cdata[0]['parentid'];
	$cstatus = $cdata[0]['status'];
	$cslug = $cdata[0]['slug'];
	if($cstatus == 'inactive'){
		header("location:index.php");
	}
	if($cparentid == 0){
		$mcdata = get_categories($cdata[0]['id']);
	}else{
	$mcdata = get_categories($cparentid);		
	}
	$mcname = $mcdata[0]['name'];
	$mcslug = $mcdata[0]['slug'];

	?>
<div class="col-lg-12 p">
<h3><b><?php echo $ttitle;?> - <?php echo $cname. "- "; ?> <?php echo $site_title;?></b></h3>
<a href="index.php"><?php echo $site_title ?></a> / <a href="category.php?c=<?php echo $mcslug;?>"><?php echo "$mcname</a>" ." / " ;?><?php echo  "<a href='category.php?c=$cslug'>$cname</a>" . " / ";?><?php echo "<a href='#'>$ttitle</a>"; ?>
</div>

</div><?php }?>
<?php require ("includes/topbanner.php");?>

<?php require ('includes/pagination.php');?>
<div class="p">
<?php 
						$count = get_stats('comments',"status='active' and postid = '$_GET[id]' ");
		if ($count >= 16) {?>
<ul class="pagination">
        <li><?php echo $paginationctrl; ?></li>
        <?php
        if ($tclosed == 'false' ) {?>
         <li><a href="newpost.php?id=<?php echo $_GET[id];?>&c=reply">Reply</a></li>
      <?php  }
        ?>
        </ul>
        <?php ;}else{?>

        	<ul class="pagination">
       	 <li><a href="#">0</a></li>
       	 <?php
        if ($tclosed === 'false') {?>
         <li><a href="newpost.php?id=<?php echo $_GET['id'];?>&c=reply">Reply</a></li>
      <?php  }
        ?>

        </ul><br>
       <?php ;}
       if ($tclosed == 'true') {
       	echo "<img src='img/closed.png'>";
       }
        	?>
        </div><br>
<div class="post border main">
<?php flash('info'); ?>
		<?php require ('includes/like.php');
			  require ('includes/ban.php');

		 ?>
			<h5 class="bderbtm"><a href="thread.php?id=<?php echo $tid;?>"><?php echo $ttitle;?></a> by <a href="profile.php?u=<?php echo $tusername?>"><?php echo $tusername;?><?php get_icon($tusertype);?></a> On <?php echo $ttimecreated;?></h5>		
			<p><?php echo $tcontent;?></p>
			<div class="attachment">
			<p>
				<?php if ($tattachment1 !="") {?>
					<img src="uploads/<?php echo $tattachment1;?>"><br />
				<?php ;}?>
				<?php if ($tattachment2 !="") {?>
					<img src="uploads/<?php echo $tattachment2;?>"><br />
				<?php ;}?>
				<?php if ($tattachment3 !="") {?>
					<img src="uploads/<?php echo $tattachment3;?>"><br />
				<?php ;}?>
				<?php if ($tattachment4 !="") {?>
					<img src="uploads/<?php echo $tattachment4;?>"><br />
				<?php ;}?>

			</p>
			</div>						
		<p>
				

				<?php if (isset($_SESSION['usertype'])) {
					if($uusertype == 'admin' or $uusertype == 'moderator'){
		echo "<a class='btn btn-success' href='newpost.php?id=$tid&c=reply&modify=yes&cid=$_GET[id]&ep=true'>(Modify)</a>";}?>  <?php echo "$likes likes";?> <?php echo "$like";
					}
					
				?>



		</p>
	
	
</div>
		<?php
						$count = get_stats('comments',"status='active' and postid = '$_GET[id]' ");
		if ($count >= 1) {
			if(isset($uusertype)){
				if($uusertype == 'admin' or $uusertype == 'moderator'){
			$comments = run_query("SELECT comments.*,members.usertype from comments LEFT JOIN members on comments.user = members.username  where postid = '$tid' LIMIT $offset, $per_page");
				}else{
			$comments = run_query("SELECT comments.*,members.usertype from comments LEFT JOIN members on comments.user = members.username  where comments.status = 'active' and postid = '$tid' LIMIT $offset, $per_page");
				}
			}else{
			$comments = run_query("SELECT comments.*,members.usertype from comments LEFT JOIN members on comments.user = members.username  where comments.status = 'active' and postid = '$tid' LIMIT $offset, $per_page");
			}
			
			foreach($comments as $comment){
				$ccontent = $comment['content'];				
				$cattachment1 = $comment['attachment'];
				$cattachment2 = $comment['attachment2'];
				$cattachment3 = $comment['attachment3'];
				$cattachment4 = $comment['attachment4'];
				$cusername = $comment['user'];
				$cusertype = $comment['usertype'];
				?>
				<div class="post border main" id="<?php echo $comment['id'];?>">
				<h5 class="bderbtm"><a href="thread.php?id=<?php echo $_GET['id'];?>&cid=<?php echo $comment['id']  ?>">Re:<?php echo $ttitle;?></a> by <a href="profile.php?u=<?php echo $cusername;?>"><?php echo $cusername;?></a><?php get_icon($cusertype);?> On <?php echo $comment['timecreated'];?></h5>
				<p><?php echo $ccontent;?></p>
				<div class="attachment">
			<p>
				<?php if ($cattachment1 !="") {?>
					<img src="uploads/<?php echo $cattachment1;?>" ><br />
				<?php ;}?>
				<?php if ($cattachment2 !="") {?>
					<img src="uploads/<?php echo $cattachment2;?>" ><br />
				<?php ;}?>
				<?php if ($cattachment3 !="") {?>
					<img src="uploads/<?php echo $cattachment3;?>" ><br />
				<?php ;}?>
				<?php if ($cattachment4 !="") {?>
					<img src="uploads/<?php echo $cattachment4;?>" ><br />
				<?php ;}?>

			</p>
							
			</div>			
				<?php
				$clikes = get_stats('clikes',"commentid = '$comment[id]' and postid = '$tid' ");			
if (isset($uusertype)) {
				if ($clikes >=0) {
					 $cnumlike = get_stats('clikes',"commentid = '$comment[id]' and postid = '$tid' and user = '$uusername' ");
				if ($cnumlike == 1  ) {
					$clike = "<a class='btn btn-info' href='thread.php?id=$tid&m=$uusername&liken=no&cid=$comment[id]'>Unlike</a>";
				}elseif ($cnumlike !== 1) {
				$clike = "<a class='btn btn-success' href='thread.php?id=$tid&m=$uusername&liken=yes&cid=$comment[id]'>Like</a>";
				}
				
				
					} }
				?>
				<p>
				
				<?php 
							
				if (isset($uusertype)) {
					if($uusertype == 'moderator' or $uusertype == 'admin'){
					if (!empty($_GET['ban'])) {
					
					if ($_GET['ban']=='active' and $comment['id']==$_GET['cid']) {
					echo "<p class=''>Are you Sure You wanna ban this reply<br><a class='btn btn-warning' href='thread.php?id=$tid&ban=active&cid=$comment[id]&d=proceed'>Yes</a><a class='btn btn-success' href='thread.php?id=$tid'>No</a><p>";}elseif ($_GET['ban']=='false' and $comment['id']==$_GET['cid']) {		
					echo "<p class=''>Are you Sure You wanna unban this reply<br><a class='btn btn-warning' href='thread.php?id=$tid&ban=false&cid=$comment[id]&d=proceed'>Yes</a><a class='btn btn-success' href='thread.php?id=$tid'>No</a><p>";	
					}
				}
				if (!empty($_GET['delete'])) {
					if (isset($_GET['delete'])=='active' and $comment['id']==$_GET['cid']) {
					echo "<p class=''>Are you Sure You wanna delete this reply<br><a class='btn btn-warning' href='thread.php?id=$tid&cid=$comment[id]&del=proceed'>Yes</a><a class='btn btn-success' href='thread.php?id=$tid'>No</a><p>";}
				}
				echo "<a class='btn btn-success' href='newpost.php?id=$tid&c=reply&modify=yes&cid=$comment[id]'>(Modify)</a>";
				if ($comment['status']=='inactive') {
					echo "<a class='btn btn-success' href='thread.php?id=$tid&ban=false&cid=$comment[id]#$comment[id]'>(Unban)</a>";
				}else{
				echo "<a class='btn btn-info' href='thread.php?id=$tid&ban=active&cid=$comment[id]#$comment[id]'>(Ban)</a>";}
				echo "<a class='btn btn-info' href='thread.php?id=$tid&delete=active&cid=$comment[id]#$comment[id]'>(Delete)</a>";
				 }
				 echo "$clikes likes $clike";
				} ?> 
				<?php
				if (isset($_SESSION['username'])) {
				if ($comment['user']==$uusername) {
					echo "<a class='btn btn-success' href='newpost.php?id=$tid&c=reply&modify=yes&cid=$comment[id]'>(Modify)</a>$clikes likes";
				}
					}
				?>

				</p>
				</div>

			<?php ; }
						
		}

		?>
<div class="p">
<?php 
						$count = get_stats('comments',"status='active' and postid = '$_GET[id]' ");
		if ($count >= 16) {?>
<ul class="pagination">
        <li><?php echo $paginationctrl; ?></li>
        <?php
         if ($tclosed == 'false') {?>
         <li><a href="newpost.php?id=<?php echo $tid;?>&c=reply">Reply</a></li>
      <?php  }
        ?>
        </ul>
        <?php ;}else{?>

        	<ul class="pagination">
       	 <li><a href="#">0</a></li>
       	 <?php
       	 if ($tclosed == 'false') {?>
         <li><a href="newpost.php?id=<?php echo $tid;?>&c=reply">Reply</a></li>
      <?php  }
        ?>

        </ul><br>
       <?php ;}

       if ($tclosed == 'true') {
       	echo "<img src='img/closed.png'>";
       }
        	?>

        </div>
        <br>
	<?php require ("includes/bottombanner.php");?>
	

<?php require ('includes/footer.php');?>
</body>
</html>
