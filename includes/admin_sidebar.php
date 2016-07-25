<section>
                <section class="hbox stretch">
                    <!-- .aside -->
                    <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                        <section class="vbox">
                            <section class="w-f scrollable">
                                <div class="slim-scroll" data-disable-fade-out="true" data-distance="0" data-height="auto" data-railopacity="0.2" data-size="10px">
                                    <div class="clearfix wrapper dk nav-user hidden-xs">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <span class="thumb avatar pull-left m-r">
                                                    <img alt="..." class="dker" src="../images/p1.jpg">
                                                        <i class="on md b-black">
                                                        </i>
                                                    </img>
                                                </span>
                                                <span class="hidden-nav-xs clear">
                                                    <span class="block m-t-xs">
                                                        <strong class="font-bold text-lt">
                                                            <?php echo "$uname "; ?><span><?php get_icon($uusertype);?></span>
                                                        </strong>
                                                        <b class="caret">
                                                        </b>
                                                    </span>
                                                    <span class="text-muted text-xs block">
                                                        <?php echo $uusertype; ?>
                                                    </span>
                                                </span>
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <!-- nav -->
                                    <nav class="nav-primary hidden-xs">
                                        <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">
                                            Start
                                        </div>
                                        <ul class="nav nav-main" data-ride="collapse">
                                            <li class="">
                                                <a class="auto" href="index.php">
                                                    <i class="i i-statistics icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Dashboard
                                                    </span>
                                                </a>
                                            </li>
                                             <li class="">
                                                <a class="auto" href="index.php?page=profile">
                                                    <i class="fa fa-user icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Profile
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="auto" href="index.php?page=viewusers">
                                                    <i class="fa fa-users icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Manage Users
                                                    </span>
                                                </a>
                                            </li>
                                           <li class="">
                                                <a class="auto" href="index.php?page=viewcategories">
                                                    <i class="fa fa-tag icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Manage Categories
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="auto" href="index.php?page=viewthreads">
                                                    <i class="fa fa-file-text-o icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Manage Threads
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="auto" href="index.php?page=setup">
                                                    <i class="fa fa-pied-piper-alt icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Manage Setup
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="auto" href="index.php?page=ads">
                                                    <i class="fa fa-money icon">
                                                    </i>
                                                    <span class="font-bold">
                                                        Manage Ads
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="line dk hidden-nav-xs">
                                        </div>
                                        
                                    </nav>
                                    <!-- / nav -->
                                </div>
                            </section>
                            <footer class="footer hidden-xs no-padder text-center-nav-xs">
                                <a class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"  href="../logout.php">
                                    <i class="i i-logout">
                                    </i>
                                </a>
                                <a class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs" data-toggle="class:nav-xs" href="#nav">
                                    <i class="i i-circleleft text">
                                    </i>
                                    <i class="i i-circleright text-active">
                                    </i>
                                </a>
                            </footer>
                        </section>
                    </aside>
                    <!-- /.aside -->