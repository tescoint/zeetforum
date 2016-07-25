 <section id="content">
                        <section class="vbox">
                            <section class="scrollable padder">
                                <div class="m-b-md">
                                    <h3 class="m-b-none">
                                        Forum Setup
                                    </h3>
                                </div>
                                
                                <form class="form-horizontal" method="post" action="../includes/process.php">
                                <section class="panel panel-default">
                                    <header class="panel-heading font-bold">
                                        <?php echo $site_title; ?>
                                    </header>
                                    <div class="panel-body">
                                    <?php flash('info'); ?>
                                     <p class="text-muted">
                                                        Please fill the information to update your Forum Settings
                                                    </p>
                                        
                                            
                                            <div class="form-group">
                                                        <label class="col-sm-2 control-label">
                                                            Forum Name
                                                        </label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" name="site_title" data-required="true" value="<?php echo $site_title; ?>" type="text">
                                                        </input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">
                                                            Forum TimeZone
                                                        </label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" name="site_timezone" data-required="true" value="<?php echo $site_timezone; ?>" data-type="text" type="text">
                                                        </input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group pull-in clearfix"></div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">
                                                                Allow New Members To Register
                                                            </label>
                                                            <div class="col-sm-10">
                                                            <select class="form-control" data-required="true" name="site_registration">
                                                            <option <?php if($site_registration == 'true'){ echo "selected";} ?> value="true">Allow</option>
                                                            <option <?php if($site_registration == 'false'){ echo "selected";} ?> value="false">Don't Allow</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    
                                            <div class="line line-dashed b-b line-lg pull-in">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">
                                                    Thread Terms
                                                </label>
                                                <div class="col-sm-10">
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
                                                        <?php echo $thread_terms; ?>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input name="thread_terms" type='hidden' id="hidden">
                                            <div class="line line-dashed b-b line-lg pull-in">
                                            </div>
                                            <input type="hidden" name="mode" value="updatesetup">
                                            <div class="line line-dashed b-b line-lg pull-in">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-default" type="submit">
                                                        Cancel
                                                    </button>
                                                    <button class="btn btn-primary" id="save" type="submit">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </section>
                        </section>
                        <a class="hide nav-off-screen-block" data-target="#nav,html" data-toggle="class:nav-off-screen,open" href="#">
                        </a>
                    </section>
                </section>
            </section>
        </section>
        <script type="text/javascript">
            $(function(){
            $('#save').click(function () {
                var mysave = $('#editor').html();
                $('#hidden').val(mysave);
            });
        });
        </script>