<?php
if(!isset($_GET['u'])){
    $username = $uusername;
}else{
    $username = $_GET['u'];
}
$pdata = get_details($username);
$pid = $pdata[0]['id'];
$pname = $pdata[0]['name'];
$pusername = $pdata[0]['username'];
$pbiography = $pdata[0]['biography'];
$plocation = $pdata[0]['location'];
$pphoneno = $pdata[0]['phoneno'];
$pemail  = $pdata[0]['email'];
$psex    = $pdata[0]['sex'];
$psecurityq = $pdata[0]['securityq'];
$psecuritya = $pdata[0]['securitya'];
$pusertype = $pdata[0]['usertype'];
$pstatus = $pdata[0]['status'];
$pavailable = $pdata[0]['available'];


?>

                    <section id="content">
                        <section class="vbox">
                            <section class="scrollable">
                                <section class="hbox stretch">
                                    <aside class="aside-lg bg-light lter b-r">
                                        <section class="vbox">
                                            <section class="scrollable">
                                                <div class="wrapper">
                                                <?php flash('info'); ?>
                                                    <section class="panel no-border bg-primary lt">
                                                        <div class="panel-body">
                                                            <div class="row m-t-xl">
                                                                <div class="col-xs-3 text-right padder-v">
                                                                <?php if($pavailable == 1){?>
                                                                    <a class="btn btn-success btn-icon btn-rounded m-t-xl" href="#">
                                                                        <i class="fa fa-circle-thin ">
                                                                        </i>
                                                                    </a><?php }else{?>
                                                                        <a class="btn btn-danger btn-icon btn-rounded m-t-xl" href="#">
                                                                        <i class="fa fa-circle-thin ">
                                                                        </i>
                                                                    </a>
                                                                        <?php }?>
                                                                </div>
                                                                <div class="col-xs-6 text-center">
                                                                    <div class="inline">
                                                                        <div class="easypiechart" data-animate="1000" data-bar-color="#fff" data-line-cap="butt" data-line-width="6" data-percent="75" data-scale-color="false" data-size="140" data-track-color="#2796de">
                                                                            <div class="thumb-lg avatar">
                                                                                <img class="dker" src="../images/p1.jpg">
                                                                                </img>
                                                                            </div>
                                                                        </div>
                                                                        <div class="h4 m-t m-b-xs font-bold text-lt">
                                                                            <?php echo "$pname "; ?><span><?php get_icon($pusertype);?></span>
                                                                        </div>
                                                                        <small class="text-muted m-b">
                                                                            <?php echo $plocation; ?>
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-3 padder-v">
                                                                    <?php if($pstatus == 'active'){
                                                                        echo " <a href='#' class='btn btn-s-md btn-success'>$pstatus</a>
                                                                        ";
                                                                    }else{
                                                                        echo " <a href='#' class='btn btn-s-md btn-danger'>$pstatus</a>
                                                                        ";
                                                                    }?>
                                                                   
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="wrapper m-t-xl m-b">
                                                                <div class="row m-b">
                                                                    <div class="col-xs-6 text-right">
                                                                        <small>
                                                                            Cell Phone
                                                                        </small>
                                                                        <div class="text-lt font-bold">
                                                                            <?php echo $pphoneno; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <small>
                                                                            Email Address
                                                                        </small>
                                                                        <div class="text-lt font-bold">
                                                                            <?php echo $pemail; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 text-right">
                                                                        <small>
                                                                            Usertype
                                                                        </small>
                                                                        <div class="text-lt font-bold">
                                                                            <?php echo $pusertype; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <small>
                                                                            Username
                                                                        </small>
                                                                        <div class="text-lt font-bold">
                                                                            <?php echo $pusername; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <footer class="panel-footer dk text-center no-border">
                                                            <div class="row pull-out">
                                                                <div class="col-xs-4">
                                                                    <div class="padder-v">
                                                                        <span class="m-b-xs h3 block text-white">
                                                                            <?php echo get_stats('threads',"user = '$pusername'"); ?>
                                                                        </span>
                                                                        <small class="text-muted">
                                                                            Threads
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4 dker">
                                                                    <div class="padder-v">
                                                                        <span class="m-b-xs h3 block text-white">
                                                                            <?php echo get_stats('comments',"user = '$pusername'"); ?>
                                                                        </span>
                                                                        <small class="text-muted">
                                                                            Posts
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="padder-v">
                                                                        <span class="m-b-xs h3 block text-white">
                                                                            <?php echo get_stats('likes',"user = '$pusername'"); ?>
                                                                        </span>
                                                                        <small class="text-muted">
                                                                            Liked post
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </footer>
                                                    </section>
                                                    <form action="../includes/process.php" method="POST">
                                                    <?php if($pusername != $uusername and $pusertype != 'admin'){?>
                                                    <input type='hidden' name='mode' value='status'>
                                                    <input type='hidden' name='username' value="<?php echo $pusername; ?>">
                                                    <div class="btn-group">            
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            Change Status<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button class='btn btn-s-md btn-danger' name='status' type="submit" value="inactive">Ban</button>
                                            </li>
                                            <li>
                                            <button class='btn btn-s-md btn-warning' name='status' type="submit" value="active">Unban</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">            
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            Change Usertype<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button class='btn btn-s-md btn-default' name='usertype' type="submit" value="admin">Admin</button>
                                            </li>
                                            <li>
                                            <button class='btn btn-s-md btn-default' name='usertype' type="submit" value="moderator">Moderator</button>
                                            </li>
                                            <li>
                                            <button class='btn btn-s-md btn-default' name='usertype' type="submit" value="vip">VIP</button>
                                            </li>
                                            <li>
                                            <button class='btn btn-s-md btn-default' name='usertype' type="submit" value="member">Member</button>
                                            </li>
                                        </ul>
                                    </div>
                                                    <?php }?>
                                                    <a href="editprofile.php?u=<?php echo $pusername; ?>" data-toggle="ajaxModal" class="btn btn-sm btn-default">Edit Profile</a>
                                                    </form>
                                                    
                                                </div>
                                            </section>
                                        </section>
                                    </aside>
                                    <aside class="col-lg-4 b-l no-padder">
                                        <section class="vbox">
                                            <section class="scrollable">
                                                <div class="wrapper">
                                                    <section class="panel panel-default">
                                                        
                                                            <textarea class="form-control no-border" rows="3" disabled=""><?php echo $pbiography; ?>
                                                            </textarea>
                                                    </section>
                                                    <section class="panel panel-default">
                                                        <h4 class="padder">
                                                            Latest Threads
                                                        </h4>
                                                        <ul class="list-group">
                                                        <?php 
                                                     $latests = latest('threads',"user = '$pusername'");
                                                    foreach($latests as $latest){?>
                                                            <li class="list-group-item">
                                                                <p>
                                                                    <a class="text-info" href="<?php echo base_url() ?>thread.php?id=<?php echo $latest['id'] ?>">
                                                                        <?php echo $latest['title']; ?>
                                                                    </a>
                                                                </p>
                                                                <small class="block text-muted">
                                                                    <i class="fa fa-clock-o">
                                                                    </i>
                                                                    <?php echo $latest['timecreated']; ?>
                                                                </small>
                                                            </li>
                                                            <?php }?>
                                                        </ul>
                                                    </section>
                                                    <section class="panel clearfix">
                                                        <div class="panel-body">
                                                          <?php get_badge($pusertype); ?>
                                                               <!--  <img class="img-circle b-a b-3x b-white" src="images/a0.png">
                                                                </img> -->
                                                           
                                                            
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>
                                        </section>
                                    </aside>
                                </section>
                            </section>
                        </section>
                        <a class="hide nav-off-screen-block" data-target="#nav,html" data-toggle="class:nav-off-screen,open" href="#">
                        </a>
                    </section>
                </section>
            </section>
        </section>

        