<div class="widget-toolbox">
    <div class="btn-toolbar">
        <div class="btn-group">
            <a id="btnSettings" href="<?php echo base_url()."index.php/".BACKEND."/dashboard"; ?>" class="btn btn-small btn-danger">
                <i class="icon-reply bigger-110"></i>
                Back
            </a>
            
            <button id="btnSettings" class="btn btn-small btn-primary">
                <i class="icon-hdd bigger-110"></i>
                Save
            </button>
        </div>

        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-small btn-grey dropdown-toggle">
                <i class="icon-caret-down icon-only bigger-110"></i>
            </button>

            <ul class="dropdown-menu pull-right dropdown-purple dropdown-caret dropdown-close">
                <li>
                    <a href="#">Action</a>
                </li>

                <li>
                    <a href="#">Another action</a>
                </li>

                <li>
                    <a href="#">Something else here</a>
                </li>

                <li class="divider"></li>

                <li>
                    <a href="#">Separated link</a>
                </li>
            </ul>
        </div><!--/btn-group-->
    </div>
</div>

<div id="page-content" class="clearfix">
    <div class="page-header position-relative">
        <h1>
            <?php echo $title; ?>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php echo $description; ?>
            </small>
        </h1>
    </div><!--/.page-header-->

    <div class="row-fluid">
        <!--PAGE CONTENT BEGINS HERE-->
        
        <form class="form-horizontal">
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4>
                                <i class="icon-tasks"></i>
                                Task Stats
                            </h4>

                            <div class="widget-toolbar">
                                <label>
                                    <small class="blue">
                                        Visibility
                                    </small>
                                    
                                    <input type="checkbox" class="ace-switch ace-switch-4" checked="true"/>
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <label for="form-field-9">Title of Widget</label>

                                    <input type="text" id="titletaskstats" name="titletaskstats" class="span12" placeholder="Title of Widget&hellip;"/>
                                </div>
                                
                                <hr />
                                <div class="control-group">
                                    <label class="control-label">Stats Data</label>

                                    <div class="controls">
                                        <label>
                                            <input name="form-field-checkbox" checked disabled="" class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Comments</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Followers</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Orders</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Experiments</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Page Views</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Traffic Used</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/span-->

                <div class="span6">
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4>
                                <i class="icon-signal"></i>
                                Traffic Sources
                            </h4>

                            <div class="widget-toolbar">
                                <label>
                                    <small class="blue">
                                        Visibility
                                    </small>
                                    
                                    <input type="checkbox" class="ace-switch ace-switch-4" checked="true"/>
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <label for="form-field-9">Title of Widget</label>

                                    <input type="text" id="titletaskstats" name="titletaskstats" class="span12" placeholder="Title of Widget&hellip;"/>
                                </div>
                                
                                <hr />
                                <div class="control-group">
                                    <label class="control-label">Stats Data</label>

                                    <div class="controls">
                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Social Network</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Search Engine</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Ad Campaigns</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Direct Traffic</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Other</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/span-->
            </div><!--/row-->

            <hr />
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4>
                                <i class="icon-bar-chart"></i>
                                Sale Stats
                            </h4>

                            <div class="widget-toolbar">
                                <label>
                                    <small class="blue">
                                        Visibility
                                    </small>
                                    
                                    <input type="checkbox" class="ace-switch ace-switch-4" checked="true"/>
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <label for="form-field-9">Title of Widget</label>

                                    <input type="text" id="titletaskstats" name="titletaskstats" class="span12" placeholder="Title of Widget&hellip;"/>
                                </div>
                                
                                <hr />
                                <div class="control-group">
                                    <label class="control-label">Stats Data</label>

                                    <div class="controls">
                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Clothes</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Pants</span>
                                        </label>

                                        <label>
                                            <input name="form-field-checkbox" checked class="ace-checkbox-2" type="checkbox" />
                                            <span class="lbl"> Boots</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/span-->
            </div><!--/row-->
        </form>
    </div>
</div>