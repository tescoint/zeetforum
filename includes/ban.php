<?php
if(isset($_SESSION['usertype'])){
if ($uusertype == 'moderator' OR $uusertype == 'admin') {

						if (isset($_GET['d'])=='proceed') {
							if ($_GET['ban']=='active') {
							$dbc->exec("UPDATE `comments` SET `status`= 'inactive' WHERE id = '$_GET[cid]'");
							flash( 'info', 'Congratulations, You banned the comment');
							}else{
							$dbc->exec("UPDATE `comments` SET `status`= 'active' WHERE id = '$_GET[cid]'");
							flash( 'info', 'Congratulations, You ubanned the comment');
							}
							header("location:thread.php?id=$_GET[id]#$_GET[cid]");
						
					} 
					
						if (isset($_GET['del']) =='proceed') {
						$dbc->exec("DELETE FROM clikes comments id = '$_GET[cid]'");
				flash( 'info', 'Congratulations, You deleted the comment');
							header("location:thread.php?id=$_GET[id]#$_GET[cid]");
					}
					
					}
				}
?>