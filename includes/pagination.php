<?php
		$num_pages = get_stats('comments',"status='active' and postid = '$_GET[id]' ");
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
			$current_page = $lastpage;
		}
		$offset = $per_page * ($current_page - 1);

		 if ($lastpage !=1) {
                $paginationctrl = '';
                if ($current_page > 1) {
                  $previous = $current_page - 1;
                   $paginationctrl = "<a href='?id=$_GET[id]&page=$previous'>Previous</a>";
                   for ($i=$current_page - 4; $i < $current_page ; $i++) { 
                     if ($i > 0) {
                       $paginationctrl .= "<a href='?id=$_GET[id]&page=$i'>$i</a>";

                     }
                   }
                }
                  $paginationctrl .= "<a href=''>$current_page</a>";
                  for ($i= $current_page + 1; $i < $lastpage ; $i++) { 
                      $paginationctrl .= "<a href='?id=$_GET[id]&page=$i'>$i</a>";
                      if ($current_page + 4 >= $lastpage) {
                        break;
                      }
                  }
                  if ($current_page != $lastpage) {
                  $next = $current_page + 1;
                  $paginationctrl .= "<a href='?id=$_GET[id]&page=$next'>Next</a>";
                }
            }
            ?>