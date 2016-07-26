<?php
if (!isset($_GET['c'])) {
	require 'includes/db.php';
	$error = "No Category Selected";
    include('includes/error.php');
    exit();
}

require ('includes/header.php');
?>
		<?php
	$cdata = get_categories($_GET['c']);
	if(empty($cdata)){
		header("location:index.php");
	}
	$cid = $cdata[0]['id'];
	$cname = $cdata[0]['name'];
	$cparentid = $cdata[0]['parentid'];
	$cstatus = $cdata[0]['status'];
	if($cstatus =='inactive'){
		header("location:index.php");
	}
	$cslug = $cdata[0]['slug'];
	?>
<div class="col-lg-12 p">
<h3><b><?php echo $cname;?> - <?php echo $site_title; ?></b></h3>

<a href="index.php"><?php echo $site_title ?></a> / <a href="category.php?c=<?php echo $_GET['c'];?>"><?php echo $cname;?> </a>
</div>


</div><br><br>
<?php
$sub_categories = run_query("SELECT * FROM categories where parentid = $cid and status = 'active'");
 if($cparentid < 1 and !empty($sub_categories) ){?>
<div class="row border p" id="list">
		<ul>
			<?php
	foreach($sub_categories as $sub_cat){
		$slug = $sub_cat['slug'];?>
	<li class="bderbtm"><a href="category.php?c=<?php echo $slug;?>"><?php echo $sub_cat['name'];?></a></li>
		<?php
	}
			?>
		</ul>
	
</div><br><br><?php }?>
<?php require ("includes/topbanner.php");?>
<div class="p">
	<?php
		$num_pages = get_stats('threads',"status='active' and category_id = '$cid' ");
		$per_page = 15;
		if (isset($_GET['page'])) {
			$current_page = $_GET['page'];

		}else{
			$current_page = 1;
		}
		$lastpage = ceil($num_pages / $per_page);
		if ($current_page < 1) {
			$current_page = 1;
		}elseif ($current_page > $lastpage) {
			if($lastpage == 0){
		        $lastpage = 1;
		      }
			$current_page = $lastpage;
		}
		$offset = $per_page * ($current_page - 1);

		 if ($lastpage !=1) {
                $paginationctrl = '';
                if ($current_page > 1) {
                  $previous = $current_page - 1;
                   $paginationctrl = "<a href='?c=$_GET[c]&page=$previous'>Previous</a>";
                   for ($i=$current_page - 4; $i < $current_page ; $i++) { 
                     if ($i > 0) {
                       $paginationctrl .= "<a href='?c=$_GET[c]&page=$i'>$i</a>";

                     }
                   }
                }
                  $paginationctrl .= "<a href=''>$current_page</a>";
                  for ($i= $current_page + 1; $i < $lastpage ; $i++) { 
                      $paginationctrl .= "<a href='?c=$_GET[c]&page=$i'>$i</a>";
                      if ($current_page + 4 >= $lastpage) {
                        break;
                      }
                  }
                  if ($current_page != $lastpage) {
                  $next = $current_page + 1;
                  $paginationctrl .= "<a href='?c=$_GET[c]&page=$next'>Next</a>";
                }
            }
            if ($num_pages <=15) {?>
            	<ul class="pagination">
        <li><a href="#">0</a></li>
        <li><a href="newpost.php?category=<?php echo $_GET['c']?>">Create New Topic</a></li>

        </ul>
           <?php ; }else{
           	?>
	<ul class="pagination">
        <li><?php echo $paginationctrl; ?></li>
        <li><a href="newpost.php?category=<?php echo $_GET['c']?>">Create New Topic</a></li>

        </ul>
      <?php ;  }
            ?>
       
</div>
<div class="row border p" id="list" style="min-height:100px">
		<ul>
			<?php
	$threads = run_query("SELECT threads.*,members.usertype FROM threads LEFT JOIN members on threads.user=members.username where category_id = $cid and threads.status = 'active' ORDER BY threads.id DESC LIMIT $offset, $per_page");
	if(empty($threads)){
		echo "<p>No Threads in this Section</p>";
	}
	foreach($threads as $thread){?>
	<li class="bderbtm" id="<?php echo $thread['id'];?>"><a href="thread.php?id=<?php echo $thread['id'];?>">&lArr;<?php echo $thread['title'];?>&rArr;</a><br />by <?php echo $thread['user']; ?><span><?php get_icon($thread['usertype']);?></span><?php echo get_stats('comments',"postid='$thread[id]'"); ?> replies (<?php echo last_replier($thread['id']) ?>) </li>
		<?php
	}
			?>
		</ul>
	
</div>
<?php require ("includes/bottombanner.php");?>
	<?php require ("includes/footer.php");?>
</body>
</html>

