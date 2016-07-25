	<?php
		
		$cdata = get_categories($_GET['category']);
		$cid = $cdata[0]['id'];
		if (isset($_POST['submit'])) {
			$slugs = strip_tags($_POST['title']);
			$slugs = substr($slugs, 0,100);
			$time = date("F j, Y, g:i a");
			$data = array(
				'title' => $_POST['title'],
				'user' => $uusername,
				'content' => $_POST['content'],
				'slug' => $slugs,
				'timecreated' => $time,
				'category_id' => $cid,
				'featured' => 'false',
				'closed' => 'false'
				);
			$insert = insert('threads',$data);
			flash( 'info', 'Congratulations, You Creat a new thread');
			$insertId = $dbc->lastInsertId();

$id = $insertId;
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

		header("location:thread.php?id=$id");
			
		}


		?>
<div class="post border main">


	<?php echo $thread_terms; ?><br><br>
<form action="newpost.php?category=<?php echo $_GET['category'];?>" enctype="multipart/form-data" method="POST">
<div class="form-group">
	<label for="title">Title</label>
	<input type="text" id="title" name="title" required class="form-control">
	</div>
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
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input name="content" type='hidden' id="hidden">
	<input type="submit" value="Submit" name="submit" id="save" class="btn btn-success">
	<input name="attachment[]" type="file">
	<input name="attachment[]" type="file">
	<input name="attachment[]" type="file">
	<input name="attachment[]" type="file">
</form>
<script type="text/javascript">
            $(function(){
            $('#save').click(function () {
                var mysave = $('#editor').html();
                $('#hidden').val(mysave);
            });
        });
        </script>
</div>
