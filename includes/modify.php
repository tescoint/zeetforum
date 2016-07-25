<?php

			if (isset($_POST['update'])) { 			
			$time = date("F j, Y, g:i a");
			if (isset($_GET['ep'])) {
			$query = $dbc->prepare("UPDATE `threads` SET `content`=?, timecreated =? WHERE id =?");
			$query->execute(array($_POST['content'],$time,$_GET['cid']));
			flash( 'info', 'Congratulations, You Modified the thread');

$id = $_GET['cid'];
$ds = DIRECTORY_SEPARATOR; //1

$storeFolder = 'uploads'; //2
$ext = pathinfo($_FILES['attachment']['name'][0], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][0])) {
$dbc->exec("UPDATE `threads` SET `attachment`= '$name' WHERE id = '$id'");	
	$tempFile = $_FILES['attachment']['tmp_name'][0]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
$ext = pathinfo($_FILES['attachment']['name'][1], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][1])) {
$dbc->exec("UPDATE `threads` SET `attachment1`= '$name' WHERE id = '$id'");	

	
	$tempFile = $_FILES['attachment']['tmp_name'][1]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
$ext = pathinfo($_FILES['attachment']['name'][2], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][2])) {
$dbc->exec("UPDATE `threads` SET `attachment3`= '$name' WHERE id = '$id'");	

	
	$tempFile = $_FILES['attachment']['tmp_name'][2]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
$ext = pathinfo($_FILES['attachment']['name'][3], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][3])) {
$dbc->exec("UPDATE `threads` SET `attachment4`= '$name' WHERE id = '$id'");	
		$tempFile = $_FILES['attachment']['tmp_name'][3]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}

		}else{
			$query = $dbc->prepare("UPDATE `comments` SET `content`=?, timecreated =? WHERE id =?");
			$query->execute(array($_POST['content'],$time,$_GET['cid']));
			flash( 'info', 'Congratulations, You Modified the reply');
			$id = $_GET['cid'];
$ds = DIRECTORY_SEPARATOR; //1

$storeFolder = 'uploads'; //2
$ext = pathinfo($_FILES['attachment']['name'][0], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][0])) {
$dbc->exec("UPDATE `comments` SET `attachment`= '$name' WHERE id = '$id'");	

	
	$tempFile = $_FILES['attachment']['tmp_name'][0]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
$ext = pathinfo($_FILES['attachment']['name'][1], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][1])) {
$dbc->exec("UPDATE `comments` SET `attachment2`= '$name' WHERE id = '$id'");	

	
	$tempFile = $_FILES['attachment']['tmp_name'][1]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
$ext = pathinfo($_FILES['attachment']['name'][2], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][2])) {
$dbc->exec("UPDATE `comments` SET `attachment3`= '$name' WHERE id = '$id'");	

	
	$tempFile = $_FILES['attachment']['tmp_name'][2]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
$ext = pathinfo($_FILES['attachment']['name'][3], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;
if (!empty($_FILES['attachment']['name'][3])) {
$dbc->exec("UPDATE `comments` SET `attachment4`= '$name' WHERE id = '$id'");	


	
	$tempFile = $_FILES['attachment']['tmp_name'][3]; //3

	$targetPath = dirname(_FILE_) . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //

}
				}
				header("location:thread.php?id=$_GET[id]#$_GET[cid]");
		}
		?>
<div class="post border main">

	<?php echo $thread_terms; ?>
<?php
			if (isset($_GET['ep'])) {
			$comment = run_query("SELECT * FROM threads where id = '$_GET[cid]'") ;}
			else{
				$comment = run_query("SELECT * FROM comments where id = '$_GET[cid]'");
			}
			$content = $comment[0]['content']; 


?><br><br>
<form action="newpost.php?id=<?php echo $_GET['id'];?>&c=<?php echo $_GET['c']; ?>&modify=yes&cid=<?php echo $_GET['cid'];?><?php if (isset($_GET['ep'])){echo '&ep='.$_GET['ep'];}?>" enctype="multipart/form-data" method="POST">
	<div class="form-group">

                                                <div class="col-sm-12">
                                                    <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font">
                                                                <i class="fa fa-font">
                                                                </i>
                                                                <b class="caret">
                                                                </b>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                            </ul>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size">
                                                                <i class="fa fa-text-height">
                                                                </i>
                                                                <b class="caret">
                                                                </b>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a data-edit="fontSize 5">
                                                                        <font size="5">
                                                                            Huge
                                                                        </font>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a data-edit="fontSize 3">
                                                                        <font size="3">
                                                                            Normal
                                                                        </font>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a data-edit="fontSize 1">
                                                                        <font size="1">
                                                                            Small
                                                                        </font>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)">
                                                                <i class="fa fa-bold">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)">
                                                                <i class="fa fa-italic">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough">
                                                                <i class="fa fa-strikethrough">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)">
                                                                <i class="fa fa-underline">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list">
                                                                <i class="fa fa-list-ul">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list">
                                                                <i class="fa fa-list-ol">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)">
                                                                <i class="fa fa-dedent">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)">
                                                                <i class="fa fa-indent">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)">
                                                                <i class="fa fa-align-left">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)">
                                                                <i class="fa fa-align-center">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)">
                                                                <i class="fa fa-align-right">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)">
                                                                <i class="fa fa-align-justify">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink">
                                                                <i class="fa fa-link">
                                                                </i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <div class="input-group m-l-xs m-r-xs">
                                                                    <input class="form-control input-sm" data-edit="createLink" placeholder="URL" type="text"/>
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-default btn-sm" type="button">
                                                                            Add
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink">
                                                                <i class="fa fa-cut">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div class="btn-group hide">
                                                            <a class="btn btn-default btn-sm" id="pictureBtn" title="Insert picture (or just drag & drop)">
                                                                <i class="fa fa-picture-o">
                                                                </i>
                                                            </a>
                                                            <input data-edit="insertImage" data-role="magic-overlay" data-target="#pictureBtn" type="file"/>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)">
                                                                <i class="fa fa-undo">
                                                                </i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)">
                                                                <i class="fa fa-repeat">
                                                                </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="form-control" id="editor" style="overflow:scroll;height:350px;max-height:550px">
                                                        <?php echo $content; ?>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input name="content" type='hidden' id="hidden">
	<input type="submit" value="Update" name="update" id="save" class="btn btn-success">
	<input name="attachment[]" type="file">
	<input name="attachment[]" type="file">
	<input name="attachment[]" type="file">
	<input name="attachment[]" type="file">
</form>
<p>
            

                    </p>

</div>

<?php
			$comments = run_query("SELECT * from comments where postid = $_GET[id] ORDER BY id DESC LIMIT 20");
			foreach($comments as $comment){
				$content = $comment['content'];
				$cusername = $comment['user'];
				$ctimecreated = $comment['timecreated'];
				?>				
				<div class="post border main">
				<h5 class="bderbtm"><a href="thread.php?id=<?php echo $_GET['id'];?>">Re:<?php echo $ttitle;?></a> by <a href="profile.php?u=<?php echo $cusername ?>"><?php echo $cusername;?></a> On <?php echo $ctimecreated;?></h5>
				<p><?php echo $content;?></p>
				</div>

			<?php ;}
						
		

		?>
		<script type="text/javascript">
            $(function(){
            $('#save').click(function () {
                var mysave = $('#editor').html();
                $('#hidden').val(mysave);
            });
        });
        </script>