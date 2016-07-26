	<?php require ('includes/header.php');?>

	
    <div class="col-lg-12 border ">
    <h2 id="logo" class="bderbtm p"><?php echo $site_title; ?></h2>
    		
		
  	<?php 
  	$categories = get_categories('main');
    foreach($categories as $category){
      $slug = $category['slug'];
      ?>
      <ul class="categories" >
      
      <li class="sub" id="cat"><?php echo "<a href='category.php?c=$slug'>$category[name]".":</a>";?>
      <ul class="sub categories">
    <?php  
      $sub_categories = run_query("SELECT * FROM categories where parentid = $category[id] and status = 'active'");
      foreach($sub_categories as $sub_cat){
        $slug = $sub_cat['slug'];?>
    <li class="sub" id="subcat"><a href="category.php?c=<?php echo $slug;?>"><?php echo $sub_cat['name'].",";?></a></li>
      <?php }?>
  		</ul>
  		</li>
  			</ul>
  				
  	<?php }

  	?>	
	</div>
</div>

<?php require ("includes/topbanner.php");?>

<?php
    $num_pages = get_stats('threads',"status='active' and featured = 'true' "); 
    $per_page = 25;
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
                   $paginationctrl = "<a href='?page=$previous'>Previous</a>";
                   for ($i=$current_page - 4; $i < $current_page ; $i++) { 
                     if ($i > 0) {
                       $paginationctrl .= "<a href='?page=$i'>$i</a>";

                     }
                   }
                }
                  $paginationctrl .= "<a href=''>$current_page</a>";
                  for ($i= $current_page + 1; $i < $lastpage ; $i++) { 
                      $paginationctrl .= "<a href='?page=$i'>$i</a>";
                      if ($current_page + 4 >= $lastpage) {
                        break;
                      }
                  }
                  if ($current_page != $lastpage) {
                  $next = $current_page + 1;
                  $paginationctrl .= "<a href='?page=$next'>Next</a>";
                }
            }
            ?>
<div class="p">
<p>
    <?php
     if ($num_pages <=25) {?>
              <ul class="pagination">
        <li><a href="#">0</a></li>
        

        </ul>
           <?php ; }else{
            ?>
  <ul class="pagination">
        <li><?php echo $paginationctrl; ?></li>
        

        </ul>
      <?php ;  }
            ?>
            </p>
</div>
<div class="row border" id="content">
	<p class="bderbtm"><a href="index.php"><?php echo $site_title; ?></a> / <a href="#">Twitter</a> / <a href="#">Facebook</a> / <a href="thread.php?id=1">How To Advertise</a></p>
	<div class="col-lg-12">
		<ul>
		<?php
		$threads = run_query("SELECT * FROM threads where featured = 'true' and status = 'active' ORDER BY featuredtime DESC LIMIT $offset, $per_page");
    foreach($threads as $thread){?>
      <a href="thread.php?id=<?php echo $thread['id'];?>"><li>&lArr; <?php echo $thread['title'];?> &rArr; </li></a>
    
    <?php }
		?>
			
		</ul>
	</div>
</div>
<div class="p">
<p>
    <?php
     if ($num_pages <=25) {?>
              <ul class="pagination">
        <li><a href="#">0</a></li>
        

        </ul>
           <?php ; }else{
            ?>
  <ul class="pagination">
        <li><?php echo $paginationctrl; ?></li>
        

        </ul>
      <?php ;  }
            ?>
            </p>
</div>

<?php require ("includes/bottombanner.php");?>


<?php require ('includes/footer.php');?>




</div>

</body>