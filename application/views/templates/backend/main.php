<?php echo $basejs; ?>
<?php echo $header; ?>
<div class="container-fluid" id="main-container" style="overflow: hidden;">
    <a id="menu-toggler" href="#">
        <span></span>
    </a>

    <?php echo $sidebar; ?>

    
    <div id="main-content" class="clearfix">
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="#">Home</a>

                    <span class="divider">
                        <i class="icon-angle-right"></i>
                    </span>
                </li>
                <?php if ($progID != "") { ?>
                <li class="active">
                    <a href="#"><?php echo ucfirst(strtolower($module)); ?></a>

                    <span class="divider">
                        <i class="icon-angle-right"></i>
                    </span>
                </li>
                <li class="active"><?php echo $title; ?></li>
                <?php } else{ ?>
                <li class="active"><?php echo $title; ?></li>
                <?php } ?>
            </ul><!--.breadcrumb-->

            <div id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
                        <i class="icon-search" id="nav-search-icon"></i>
                    </span>
                </form>
            </div><!--#nav-search-->
        </div>
        <div class="slim-scroll-page" >
            <div id="page-content">
                <div class="page-header position-relative">
                    <h1>
                        <?php echo $title;?>
                        <small>
                            <i class="icon-double-angle-right"></i>
                            <?php echo $description;?>
                        </small>
                    </h1>
                </div><!--/.page-header-->
                
                <?php echo $content_body;?>
            </div>
        </div>
        
        <div id="ace-settings-container">
            <div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
                <i class="icon-cog"></i>
            </div>

            <div id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hidden">
                            <option data-class="default" value="#438EB9">#438EB9</option>
                            <option data-class="skin-1" value="#222A2D">#222A2D</option>
                            <option data-class="skin-2" value="#C6487E">#C6487E</option>
                            <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" checked="checked" class="ace-checkbox-2" id="ace-settings-header"/>
                    <label class="lbl" for="ace-settings-header"> Fixed Header</label>
                </div>

                <div>
                    <input type="checkbox" checked="checked" class="ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>
            </div>
        </div><!--/#ace-settings-container-->
    
    </div><!--/#main-content-->
</div><!--/.fluid-container#main-container-->
<?php echo $footer ?>
