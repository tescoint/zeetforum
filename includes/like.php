<?php ob_start();
	if (empty($_GET['cid']) and !empty($_GET['liken'])) {		
			if ($_GET['liken']=='true') {
				$data = array(
				'postid' => $_GET['id'],
				'user' => $_GET['m'],
				'liken' => 1
		);
		$insert = insert('likes',$data);
		flash( 'info', 'Congratulations, You liked the thread');			
			}elseif ($_GET['liken']=='false') {
				$liked =run_query("SELECT * FROM likes where postid = '$_GET[id]' and user = '$_GET[m]'");
				$liked = $liked[0]['id'];
				$lquery = $dbc->exec("DELETE FROM likes where id = '$liked'");
				flash( 'info', 'Congratulations, You unliked the thread');				
			}
			header("location:thread.php?id=$_GET[id]#$_GET[cid]");	
				}


				$likes = get_stats('likes',"postid = '$_GET[id]' ");
				if (isset($uusername)) {
				if ($likes >=0) {
					$numlike = get_stats('likes',"postid = '$_GET[id]' and user = '$uusername' ");
				if ($numlike >= 1  ) {
					$like = "<a class='btn btn-info' href='thread.php?id=$_GET[id]&m=$uusername&liken=false'>Unlike</a>";
				}elseif ($numlike < 1) {
				$like = "<a class='btn btn-success' href='thread.php?id=$_GET[id]&m=$uusername&liken=true'>Like</a>";
				}
				
				
					} } 
			if (!empty($_GET['liken']) and !empty($_GET['cid'])) {
			
			
				
					if ($_GET['liken']=='yes' and $_GET['cid'] !== "") {
						$data = array(
				'postid' => $_GET['id'],
				'user' => $_GET['m'],
				'liken' => 1,
				'commentid' => $_GET['cid']
				);
				$insert = insert('clikes',$data);
				flash( 'info', 'Congratulations, You liked the reply');						
			}elseif ($_GET['liken']=='no' and $_GET['cid'] !== "") {
				$cliked = run_query("SELECT * FROM clikes where postid = '$_GET[id]' and user = '$_GET[m]' and commentid = '$_GET[cid]'");
				$cliked = $cliked[0][id];
				$clquery = $dbc->exec("DELETE FROM clikes where id = '$cliked'");
				flash( 'info', 'Congratulations, You unliked the thread');
				
			}
			header("location:thread.php?id=$_GET[id]#$_GET[cid]");
		}
?>