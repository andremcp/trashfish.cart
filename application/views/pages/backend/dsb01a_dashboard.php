<div class="row-fluid">
    <!--PAGE CONTENT BEGINS HERE-->

    <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
                <i class="icon-remove"></i>
        </button>

        <i class="icon-ok green"></i>

        Welcome to<strong class="green">Trashfish<small> (v0.1)</small></strong> Administrator.
    </div>

    <div class="space-6"></div>
    
    <div class="row-fluid">
        <div class="span6">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="lighter">
                        <i class="icon-tasks orange"></i>
                        Task Stats
                    </h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <div class="infobox-container">
                            <div class="infobox infobox-green">
                                <div class="infobox-icon">
                                    <i class="icon-comments"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">32</span>
                                    <div class="infobox-content">comments + 2 reviews</div>
                                </div>
                                <div class="stat stat-success">8%</div>
                            </div>

                            <div class="infobox infobox-blue">
                                <div class="infobox-icon">
                                    <i class="icon-twitter"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">11</span>
                                    <div class="infobox-content">new followers</div>
                                </div>

                                <div class="badge badge-success">
                                    +32%
                                    <i class="icon-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-pink">
                                <div class="infobox-icon">
                                    <i class="icon-shopping-cart"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">8</span>
                                    <div class="infobox-content">new orders</div>
                                </div>
                                <div class="stat stat-important">+4%</div>
                            </div>

                            <div class="infobox infobox-red  ">
                                <div class="infobox-icon">
                                    <i class="icon-beaker"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">7</span>
                                    <div class="infobox-content">experiments</div>
                                </div>
                            </div>

                            <div class="infobox infobox-orange2  ">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">6,251</span>
                                    <div class="infobox-content">pageviews</div>
                                </div>

                                <div class="badge badge-success">
                                    7.2%
                                    <i class="icon-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-blue2  ">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                        <span class="percent">42</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-text">traffic used</span>

                                    <div class="infobox-content">
                                        <span class="bigger-110">~</span>58GB remaining
                                    </div>
                                </div>
                            </div>

                            <div class="space-6"></div>

                            <div class="infobox infobox-green infobox-small infobox-dark">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                        <span class="percent">61</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Task</div>
                                    <div class="infobox-content">Completion</div>
                                </div>
                            </div>

                            <div class="infobox infobox-blue infobox-small infobox-dark">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Earnings</div>
                                    <div class="infobox-content">$32,000</div>
                                </div>
                            </div>

                            <div class="infobox infobox-grey infobox-small infobox-dark">
                                <div class="infobox-icon">
                                    <i class="icon-download-alt"></i>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Downloads</div>
                                    <div class="infobox-content">1,205</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span6">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="lighter">
                        <i class="icon-signal"></i>
                        Traffic Sources
                    </h4>

                    <div class="widget-toolbar no-border">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                            This Week
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
                            <li class="active">
                                <a href="#">This Week</a>
                            </li>

                            <li>
                                <a href="#">Last Week</a>
                            </li>

                            <li>
                                <a href="#">This Month</a>
                            </li>

                            <li>
                                <a href="#">Last Month</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div id="piechart-placeholder"></div>

                        <div class="hr hr8 hr-double"></div>

                        <div class="clearfix">
                            <div class="grid3">
                                <span class="grey">
                                    <i class="icon-facebook-sign icon-2x blue"></i>
                                    &nbsp; likes
                                </span>
                                <h4 class="bigger pull-right">1,255</h4>
                            </div>

                            <div class="grid3">
                                <span class="grey">
                                    <i class="icon-twitter-sign icon-2x purple"></i>
                                    &nbsp; tweets
                                </span>
                                <h4 class="bigger pull-right">941</h4>
                            </div>

                            <div class="grid3">
                                <span class="grey">
                                    <i class="icon-pinterest-sign icon-2x red"></i>
                                    &nbsp; pins
                                </span>
                                <h4 class="bigger pull-right">1,050</h4>
                            </div>
                        </div>
                    </div><!--/widget-main-->
                </div><!--/widget-body-->
            </div><!--/widget-box-->
        </div>

    </div><!--/row-->

    <div class="hr hr32 hr-dotted"></div>

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="lighter">
                        <i class="icon-bar-chart"></i>Sale Stats
                    </h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main padding-4">
                        <div id="sales-charts"></div>
                    </div><!--/widget-main-->
                </div><!--/widget-body-->
            </div><!--/widget-box-->
        </div>
    </div>

    <div class="hr hr32 hr-dotted"></div>

    <div class="row-fluid">
        <div class="span6">
            <div class="widget-box transparent" id="recent-box">
                <div class="widget-header widget-header-flat">
                    <h4 class="lighter">
                        <i class="icon-rss orange"></i>
                        Recent
                    </h4>

                    <div class="widget-toolbar no-border">
                        <ul class="nav nav-tabs" id="recent-tab">
                            <li class="active">
                                <a data-toggle="tab" href="#task-tab">Tasks</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#member-tab">Members</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#comment-tab">Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main padding-4">
                        <div class="tab-content padding-8">
                            <div id="task-tab" class="tab-pane active">
                                <h4 class="smaller lighter green">
                                    <i class="icon-list"></i>
                                    Sortable Lists
                                </h4>

                                <ul id="tasks" class="item-list">
                                    <li class="item-orange">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Answering customer questions</span>
                                        </label>

                                        <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                            <span class="percent">42</span>%
                                        </div>
                                    </li>

                                    <li class="item-red">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Fixing bugs</span>
                                        </label>

                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button class="btn btn-mini btn-info">
                                                    <i class="icon-edit bigger-125"></i>
                                                </button>

                                                <button class="btn btn-mini btn-danger ">
                                                    <i class="icon-trash bigger-125"></i>
                                                </button>

                                                <button class="btn btn-mini btn-yellow">
                                                    <i class="icon-flag bigger-125"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item-default">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Adding new features</span>
                                        </label>

                                        <div class="inline pull-right position-relative">
                                            <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-angle-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-closer">
                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done" data-placement="left">
                                                        <span class="green">
                                                            <i class="icon-ok"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left">
                                                        <span class="red">
                                                            <i class="icon-trash"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="item-blue">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Upgrading scripts used in template</span>
                                        </label>
                                    </li>

                                    <li class="item-grey">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Adding new skins</span>
                                        </label>
                                    </li>

                                    <li class="item-green">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Updating server software up</span>
                                        </label>
                                    </li>

                                    <li class="item-pink">
                                        <label class="inline">
                                            <input type="checkbox" />
                                            <span class="lbl"> Cleaning up</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div id="member-tab" class="tab-pane">
                                <div class="clearfix">
                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                            <img alt="Billok's avatar" src="<?php echo base_url(AVATAR."unknownmale.png")?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Billok</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">20 min</span>
                                            </div>

                                            <div>
                                                <span class="label label-warning">pending</span>

                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-angle-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right">
                                                                <span class="green">
                                                                    <i class="icon-ok"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right">
                                                                <span class="orange">
                                                                    <i class="icon-remove"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right">
                                                                <span class="red">
                                                                    <i class="icon-trash"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                            <img alt="Zanneta's avatar" src="<?php echo base_url(AVATAR."unknownfemale.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                    <a href="#">Zanneta</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">1 hour</span>
                                            </div>

                                            <div>
                                                <span class="label label-warning">pending</span>

                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-angle-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right">
                                                                <span class="green">
                                                                        <i class="icon-ok"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right">
                                                                <span class="orange">
                                                                    <i class="icon-remove"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right">
                                                                <span class="red">
                                                                    <i class="icon-trash"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                                <img alt="Mopeng's avatar" src="<?php echo base_url(AVATAR."unknownmale.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Mopeng</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">2 hour</span>
                                            </div>

                                            <div>
                                                <span class="label label-warning">pending</span>

                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-angle-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right">
                                                                <span class="green">
                                                                    <i class="icon-ok"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right">
                                                                <span class="orange">
                                                                    <i class="icon-remove"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right">
                                                                <span class="red">
                                                                    <i class="icon-trash"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                            <img alt="Bojak's avatar" src="<?php echo base_url(AVATAR."vander.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Bojak</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">3 hour</span>
                                            </div>

                                            <div>
                                                <span class="label label-important">blocked</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                                <img alt="Vander's avatar" src="<?php echo base_url(AVATAR."vander.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Vander</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">6 hour</span>
                                            </div>

                                            <div>
                                                <span class="label label-success arrowed-in">approved</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                            <img alt="Kimonk's avatar" src="<?php echo base_url(AVATAR."kimonk.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Kimonk</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">yesterday</span>
                                            </div>

                                            <div>
                                                <span class="label label-info arrowed-in  arrowed-in-right">online</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                            <img alt="Taniwan's avatar" src="<?php echo base_url(AVATAR."taniwan.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Taniwan</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">2 days ago</span>
                                            </div>

                                            <div>
                                                <span class="label label-info arrowed-in  arrowed-in-right">online</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="user">
                                            <img alt="Alpiant's avatar" src="<?php echo base_url(AVATAR."alpiant.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Alpiant</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">3 days ago</span>
                                            </div>

                                            <div>
                                                <span class="label label-success arrowed-in">approved</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="center">
                                    <i class="icon-group icon-2x green"></i>

                                    &nbsp;
                                    <a href="#">
                                        See all members &nbsp;
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="hr hr-double hr8"></div>
                            </div><!--member-tab-->

                            <div id="comment-tab" class="tab-pane">
                                <div class="comments">
                                    <div class="itemdiv commentdiv">
                                        <div class="user">
                                            <img alt="Vander's Avatar" src="<?php echo base_url(AVATAR."vander.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Vander</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">6 min</span>
                                            </div>

                                            <div class="text">
                                                <i class="icon-quote-left"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                            </div>
                                        </div>

                                        <div class="tools">
                                            <div class="inline position-relative">
                                                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-angle-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left">
                                                            <span class="green">
                                                                <i class="icon-ok"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left">
                                                            <span class="orange">
                                                                <i class="icon-remove"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left">
                                                            <span class="red">
                                                                <i class="icon-trash"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv commentdiv">
                                        <div class="user">
                                            <img alt="Taniwan's Avatar" src="<?php echo base_url(AVATAR."taniwan.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Taniwan</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="blue">15 min</span>
                                            </div>

                                            <div class="text">
                                                <i class="icon-quote-left"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                            </div>
                                        </div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info">
                                                <i class="icon-only icon-pencil"></i>
                                            </a>

                                            <a href="#" class="btn btn-minier btn-danger">
                                                <i class="icon-only icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="itemdiv commentdiv">
                                        <div class="user">
                                            <img alt="Splash's Avatar" src="<?php echo base_url(AVATAR."splash.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Splash</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="orange">22 min</span>
                                            </div>

                                            <div class="text">
                                                <i class="icon-quote-left"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                            </div>
                                        </div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info">
                                                <i class="icon-only icon-pencil"></i>
                                            </a>

                                            <a href="#" class="btn btn-minier btn-danger">
                                                <i class="icon-only icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="itemdiv commentdiv">
                                        <div class="user">
                                            <img alt="Kimonk's Avatar" src="<?php echo base_url(AVATAR."kimonk.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Kimonk</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="red">45 min</span>
                                            </div>

                                            <div class="text">
                                                <i class="icon-quote-left"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                            </div>
                                        </div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info">
                                                <i class="icon-only icon-pencil"></i>
                                            </a>

                                            <a href="#" class="btn btn-minier btn-danger">
                                                <i class="icon-only icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="itemdiv commentdiv">
                                        <div class="user">
                                            <img alt="Alpiant's Avatar" src="<?php echo base_url(AVATAR."alpiant.png"); ?>" />
                                        </div>

                                        <div class="body">
                                            <div class="name">
                                                <a href="#">Alpiant</a>
                                            </div>

                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="red">55 min</span>
                                            </div>

                                            <div class="text">
                                                <i class="icon-quote-left"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                            </div>
                                        </div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info">
                                                <i class="icon-only icon-pencil"></i>
                                            </a>

                                            <a href="#" class="btn btn-minier btn-danger">
                                                <i class="icon-only icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr hr8"></div>

                                <div class="center">
                                    <i class="icon-comments-alt icon-2x green"></i>

                                    &nbsp;
                                    <a href="#">
                                        See all comments &nbsp;
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="hr hr-double hr8"></div>
                            </div>
                        </div>
                    </div><!--/widget-main-->
                </div><!--/widget-body-->
            </div><!--/widget-box-->
        </div><!--/span-->

        <div class="span6">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="lighter">
                        <i class="icon-star orange"></i>
                        Popular Products
                    </h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="icon-caret-right blue"></i>name
                                    </th>

                                    <th>
                                        <i class="icon-caret-right blue"></i>price
                                    </th>

                                    <th class="hidden-phone">
                                        <i class="icon-caret-right blue"></i>status
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>product 001</td>

                                    <td>
                                        <small>
                                            <s class="red">39.999,00 IDR</s>
                                        </small>
                                        <b class="green">$29.999,00 IDR</b>
                                    </td>

                                    <td class="hidden-phone">
                                        <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>product 002</td>

                                    <td>
                                        <small>
                                            <s class="red">69.999,00 IDR</s>
                                        </small>
                                        <b class="green">39.999,00 IDR</b>
                                    </td>

                                    <td class="hidden-phone">
                                        <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>product 003</td>

                                    <td>
                                        <small>
                                            <s class="red"></s>
                                        </small>
                                        <b class="green">25.500,00 IDR</b>
                                    </td>

                                    <td class="hidden-phone">
                                        <span class="label label-important arrowed">pending</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>product 004</td>

                                    <td>
                                        <small>
                                            <s class="red"></s>
                                        </small>
                                        <b class="green">49.999,00 IDR</b>
                                    </td>

                                    <td class="hidden-phone">
                                        <span class="label arrowed">
                                            <s>out of stock</s>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>product 005</td>

                                    <td>
                                        <small>
                                            <s class="red"></s>
                                        </small>
                                        <b class="green">67.600,00 IDR</b>
                                    </td>

                                    <td class="hidden-phone">
                                        <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--/widget-main-->
                </div><!--/widget-body-->
            </div><!--/widget-box-->
        </div><!--/span-->
    </div><!--/row-->
    <!--PAGE CONTENT ENDS HERE-->
</div><!--/row-->