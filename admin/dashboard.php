<section id="content">
                        <section class="hbox stretch">
                            <section>
                                <section class="vbox">
                                    <section class="scrollable padder">
                                        <section class="row m-b-md">
                                            <div class="col-sm-6">
                                                <h3 class="m-b-xs text-black">
                                                    Dashboard
                                                </h3>
                                                <small>
                                                    Welcome back, <?php echo $uname; ?>,
                                                    <i class="fa fa-map-marker fa-lg text-primary">
                                                    </i>
                                                    <?php echo $ulocation; ?>
                                                </small>
                                            </div>
                                            <div class="col-sm-6 text-right text-left-xs m-t-md">
                                                <a class="btn btn-icon b-2x btn-default btn-rounded hover" href="#">
                                                    <i class="i i-bars3 hover-rotate">
                                                    </i>
                                                </a>
                                                <a class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show" href="#nav, #sidebar">
                                                    <i class="fa fa-bars">
                                                    </i>
                                                </a>
                                            </div>
                                        </section>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="panel b-a">
                                                    <div class="row m-n">
                                                        <div class="col-md-6 b-b b-r">
                                                            <a class="block padder-v hover" href="#">
                                                                <span class="i-s i-s-2x pull-left m-r-sm">
                                                                    <i class="i i-hexagon2 i-s-base text-danger hover-rotate">
                                                                    </i>
                                                                    <i class="i i-plus2 i-1x text-white">
                                                                    </i>
                                                                </span>
                                                                <span class="clear">
                                                                    <span class="h3 block m-t-xs text-danger">
                                                                        <?php echo get_stats('threads',"status='active' and closed = 'false'"); ?>
                                                                    </span>
                                                                    <small class="text-muted text-u-c">
                                                                        Active Open Threads
                                                                    </small>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 b-b">
                                                            <a class="block padder-v hover" href="#">
                                                                <span class="i-s i-s-2x pull-left m-r-sm">
                                                                    <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate">
                                                                    </i>
                                                                    <i class="i i-users2 i-sm text-white">
                                                                    </i>
                                                                </span>
                                                                <span class="clear">
                                                                    <span class="h3 block m-t-xs text-success">
                                                                        <?php echo get_stats('members',"status='active' and usertype = 'member'"); ?>
                                                                    </span>
                                                                    <small class="text-muted text-u-c">
                                                                        Active Members
                                                                    </small>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 b-b b-r">
                                                            <a class="block padder-v hover" href="#">
                                                                <span class="i-s i-s-2x pull-left m-r-sm">
                                                                    <i class="i i-hexagon2 i-s-base text-info hover-rotate">
                                                                    </i>
                                                                    <i class="i i-location i-sm text-white">
                                                                    </i>
                                                                </span>
                                                                <span class="clear">
                                                                    <span class="h3 block m-t-xs text-info">
                                                                        <?php echo get_stats('threads',"status='active' and closed = 'true'"); ?>
                                                                    </span>
                                                                    <small class="text-muted text-u-c">
                                                                        Active Closed Threads 
                                                                    </small>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 b-b">
                                                            <a class="block padder-v hover" href="#">
                                                                <span class="i-s i-s-2x pull-left m-r-sm">
                                                                    <i class="i i-hexagon2 i-s-base text-primary hover-rotate">
                                                                    </i>
                                                                    <i class="i i-alarm i-sm text-white">
                                                                    </i>
                                                                </span>
                                                                <span class="clear">
                                                                    <span class="h3 block m-t-xs text-primary">
                                                                        <?php echo get_stats('members',"available='1'"); ?>
                                                                    </span>
                                                                    <small class="text-muted text-u-c">
                                                                        Online Members
                                                                    </small>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="panel b-a">
                                                    <div class="panel-heading no-border bg-primary lt text-center">
                                                        <a href="#">
                                                            <i class="fa fa-pied-piper fa fa-3x m-t m-b text-white">
                                                            </i>
                                                        </a>
                                                    </div>
                                                    <div class="padder-v text-center clearfix">
                                                        <div class="col-xs-6 b-r">
                                                            <div class="h3 font-bold">
                                                                <?php echo get_stats('threads'); ?>
                                                            </div>
                                                            <small class="text-muted">
                                                                Total Threads
                                                            </small>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="h3 font-bold">
                                                                <?php echo get_stats('members'); ?>
                                                            </div>
                                                            <small class="text-muted">
                                                                Total Members
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="panel b-a">
                                                    <div class="panel-heading no-border bg-info lter text-center">
                                                        <a href="#">
                                                            <i class="fa fa-thumbs-o-up fa fa-3x m-t m-b text-white">
                                                            </i>
                                                        </a>
                                                    </div>
                                                    <div class="padder-v text-center clearfix">
                                                        <div class="col-xs-6 b-r">
                                                            <div class="h3 font-bold">
                                                                <?php echo get_stats('likes'); ?>
                                                            </div>
                                                            <small class="text-muted">
                                                                Post Likes
                                                            </small>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="h3 font-bold">
                                                                <?php echo get_stats('clikes'); ?>
                                                            </div>
                                                            <small class="text-muted">
                                                                Comment Likes
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="row">
                                            <div class="col-md-4">
                                                <section class="panel b-a">
                                                    <div class="panel-heading b-b">
                                                        <span class="badge pull-right">
                                                            12
                                                        </span>
                                                        <span class="label bg-success">
                                                            New
                                                        </span>
                                                        <a class="font-bold" href="#">
                                                            HTML Courses
                                                        </a>
                                                    </div>
                                                    <div class="panel-body">
                                                        <a class="block h4 font-bold m-b text-black" href="#">
                                                            Get started with Bootstrap
                                                        </a>
                                                        <div class="r b bg-warning-ltest wrapper m-b">
                                                            There are a few easy ways to quickly get started with Bootstrap...
                                                        </div>
                                                        <div class="m-b">
                                                            <a class="avatar thumb-sm" href="#">
                                                                <img alt="..." src="images/a0.png">
                                                                    <i class="on b-white">
                                                                    </i>
                                                                </img>
                                                            </a>
                                                            <a class="avatar thumb-sm" href="#">
                                                                <img alt="..." src="images/a1.png">
                                                                    <i class="busy b-white">
                                                                    </i>
                                                                </img>
                                                            </a>
                                                            <a class="avatar thumb-sm" href="#">
                                                                <img alt="..." src="images/a2.png">
                                                                    <i class="away b-white">
                                                                    </i>
                                                                </img>
                                                            </a>
                                                            <a class="avatar thumb-sm" href="#">
                                                                <img alt="..." src="images/a3.png">
                                                                    <i class="off b-white">
                                                                    </i>
                                                                </img>
                                                            </a>
                                                            <a class="btn btn-info btn-rounded font-bold" href="#">
                                                                +152
                                                            </a>
                                                        </div>
                                                        <p class="text-sm">
                                                            Start at 2:00 PM, 12/5/2016
                                                        </p>
                                                        <a class="btn btn-default btn-sm btn-rounded m-b-xs" href="#">
                                                            <i class="fa fa-plus">
                                                            </i>
                                                            Take me in
                                                        </a>
                                                    </div>
                                                    <div class="clearfix panel-footer">
                                                        <small class="text-muted pull-right">
                                                            5m ago
                                                        </small>
                                                        <a class="thumb-sm pull-left m-r" href="#">
                                                            <img alt="..." class="img-circle" src="images/a0.png">
                                                            </img>
                                                        </a>
                                                        <div class="clear">
                                                            <a href="#">
                                                                <strong>
                                                                    Jonathan Omish
                                                                </strong>
                                                            </a>
                                                            <small class="block text-muted">
                                                                San Francisco, USA
                                                            </small>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-4">
                                                <section class="panel b-a">
                                                    <div class="panel-heading b-b">
                                                        <span class="badge bg-warning pull-right">
                                                            10
                                                        </span>
                                                        <a class="font-bold" href="#">
                                                            Messages
                                                        </a>
                                                    </div>
                                                    <ul class="list-group list-group-lg no-bg auto">
                                                        <a class="list-group-item clearfix" href="#">
                                                            <span class="pull-left thumb-sm avatar m-r">
                                                                <img alt="..." src="images/a4.png">
                                                                    <i class="on b-white bottom">
                                                                    </i>
                                                                </img>
                                                            </span>
                                                            <span class="clear">
                                                                <span>
                                                                    Chris Fox
                                                                </span>
                                                                <small class="text-muted clear text-ellipsis">
                                                                    What's up, buddy
                                                                </small>
                                                            </span>
                                                        </a>
                                                        <a class="list-group-item clearfix" href="#">
                                                            <span class="pull-left thumb-sm avatar m-r">
                                                                <img alt="..." src="images/a5.png">
                                                                    <i class="on b-white bottom">
                                                                    </i>
                                                                </img>
                                                            </span>
                                                            <span class="clear">
                                                                <span>
                                                                    Amanda Conlan
                                                                </span>
                                                                <small class="text-muted clear text-ellipsis">
                                                                    Come online and we need talk about the plans that we have discussed
                                                                </small>
                                                            </span>
                                                        </a>
                                                        <a class="list-group-item clearfix" href="#">
                                                            <span class="pull-left thumb-sm avatar m-r">
                                                                <img alt="..." src="images/a6.png">
                                                                    <i class="busy b-white bottom">
                                                                    </i>
                                                                </img>
                                                            </span>
                                                            <span class="clear">
                                                                <span>
                                                                    Dan Doorack
                                                                </span>
                                                                <small class="text-muted clear text-ellipsis">
                                                                    Hey, Some good news
                                                                </small>
                                                            </span>
                                                        </a>
                                                        <a class="list-group-item clearfix" href="#">
                                                            <span class="pull-left thumb-sm avatar m-r">
                                                                <img alt="..." src="images/a7.png">
                                                                    <i class="away b-white bottom">
                                                                    </i>
                                                                </img>
                                                            </span>
                                                            <span class="clear">
                                                                <span>
                                                                    Lauren Taylor
                                                                </span>
                                                                <small class="text-muted clear text-ellipsis">
                                                                    Nice to talk with you.
                                                                </small>
                                                            </span>
                                                        </a>
                                                    </ul>
                                                    <div class="clearfix panel-footer">
                                                        <div class="input-group">
                                                            <input class="form-control input-sm btn-rounded" placeholder="Search" type="text">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default btn-sm btn-rounded" type="submit">
                                                                        <i class="fa fa-search">
                                                                        </i>
                                                                    </button>
                                                                </span>
                                                            </input>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-4">
                                                <section class="panel b-light">
                                                    <header class="panel-heading">
                                                        <strong>
                                                            Calendar
                                                        </strong>
                                                    </header>
                                                    <div class="bg-light dker m-l-n-xxs m-r-n-xxs" id="calendar">
                                                    </div>
                                                    <div class="list-group">
                                                        <a class="list-group-item text-ellipsis" href="#">
                                                            <span class="badge bg-warning">
                                                                7:30
                                                            </span>
                                                            Meet a friend
                                                        </a>
                                                        <a class="list-group-item text-ellipsis" href="#">
                                                            <span class="badge bg-success">
                                                                9:30
                                                            </span>
                                                            Have a kick off meeting with .inc company
                                                        </a>
                                                    </div>
                                                </section>
                                            </div>
                                        </div> -->
                                    </section>
                                </section>
                            </section>
                            <!-- side content -->
                            <aside class="aside-md bg-black hide" id="sidebar">
                                <section class="vbox animated fadeInRight">
                                    <section class="scrollable">
                                        <div class="wrapper">
                                            <strong>
                                                Recent Threads
                                            </strong>
                                        </div>
                                        <ul class="list-group no-bg no-borders auto">
                                        <?php 
                                        $latests = latest('threads');
                                        foreach($latests as $latest){?>
                                            <li class="list-group-item">
                                                <span class="fa-stack pull-left m-r-sm">
                                                    <i class="fa fa-circle fa-stack-2x text-success">
                                                    </i>
                                                    <i class="fa fa-reply fa-stack-1x text-white">
                                                    </i>
                                                </span>
                                                <span class="clear">
                                                    <a href="<?php echo base_url() ?>thread.php?id=<?php echo $latest['id'] ?>">
                                                        <?php echo $latest['title']; ?>
                                                    </a>
                                                    by <?php echo $latest['user']; ?>
                                                    <small class="icon-muted">
                                                        <?php echo $latest['timecreated']; ?>
                                                    </small>
                                                </span>
                                            </li>
                                            <?php }?>
                                        </ul>
                                        
                                    </section>
                                </section>
                            </aside>
                            <!-- / side content -->
                        </section>
                        <a class="hide nav-off-screen-block" data-target="#nav,html" data-toggle="class:nav-off-screen,open" href="#">
                        </a>
                    </section>
                </section>
            </section>
        </section>