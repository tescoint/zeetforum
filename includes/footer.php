<div id="footer" class="row border">
	<div class="col-lg-12 ">
<h3>MEMBERS ONLINE</h3>
<?php
	$available = get_stats('members',"status='active' and available = '1' ");
		if ($available<1){
		$emem = "Member";
		}else{
		$emem = "Members";
		}
?>
	<h4> (<?php echo $available; echo " $emem";?> Online! in last 5 minutes)</h4>
	<p>
	 <?php
	$avail = run_query("SELECT * FROM members where available = 1 and status = 'active' ");
	foreach($avail as $avail){
		echo "<a href='profile.php?u=$avail[username]'>$avail[username]</a>,";
	}
?>
	</p>
	</div>
	</div>
	<div class="col-lg-12 border" id="copy">
		<p><a href="index.php"><?php echo $site_title ?></a> - Copyright © <?php echo date("Y"); ?> <a href="about.php"><b>YAAT CREW</b></a>. All rights reserved. <a href="post.php?p=1">See How To Advertise.</a><br />
Disclaimer: Every <?php echo $site_title; ?> member is solely responsible for anything that he/she posts or uploads on <b><?php echo $site_title; ?>.</b></p>
	</div>