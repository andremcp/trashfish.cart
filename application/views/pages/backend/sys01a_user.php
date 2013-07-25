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

        <div class="row-fluid">
            <div class="widget-box transparent">
                <div class="widget-header">
                    <h5 class="bigger lighter">
                        <i class="icon-table"></i>
                        Table of <?php echo $title; ?>
                    </h5>
                    
                    <div class="widget-toolbar no-border">
                        <button class="form_user_open btn btn-mini btn-success">
                            <i class="icon-plus bigger-110 icon-only"></i>
                        </button>
                        <button class="btn btn-danger btn-mini" id="btn-delete-all-user">
                            <i class="icon-trash  bigger-110 icon-only"></i>
                        </button>
                    </div>
                    
                    <div class="widget-toolbar">
                        <a href="#" data-action="reload">
                            <i class="icon-refresh"></i>
                        </a>
                        
                        <a href="#" data-action="collapse">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table id="table_report" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>
                                    <th>User Code</th>
                                    <th>Username</th>
                                    <th class="hidden-480">Email</th>
                                    <th class="hidden-480">Type</th>
                                    <th class="hidden-phone">
                                        <i class="icon-time hidden-phone"></i>Registered
                                    </th>
                                    <th class="hidden-480">Status</th>

                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i=0;?>
                                <?php foreach($data as $item): ?>
                                
                                <tr>
                                    <td class="center">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#"><?php echo $item['USRCODE'];?></a>
                                    </td>
                                    <td><?php echo $item['USRNAME'];?></td>
                                    <td class="hidden-480"><?php echo $item['USRMAIL'];?></td>
                                    <td class="hidden-480"><?php echo $item['USRTYPE'];?></td>
                                    <td class="hidden-phone"><?php echo $item['USRINDT'];?></td>

                                    <td class="hidden-480">
                                        <?php if ($item['USRSTAT'] == '1'): ?>
                                            <span class="label label-info arrowed arrowed-righ">Active</span>
                                        <?php elseif ($item['USRSTAT'] == '2'): ?>
                                            <span class="label label-warning">Pending</span>
                                        <?php else: ?>
                                            <span class="label label-inverse arrowed-in">Inactive</span>
                                        <?php endif;?>
                                    </td>

                                    <td class="td-actions">
                                        <div class="hidden-phone visible-desktop btn-group">
                                            <button class="form_user_open btn btn-mini btn-info">
                                                <i class="icon-edit bigger-120"></i>
                                            </button>
                                            <button class="btn btn-mini btn-danger" id="btn-delete-user-<?php echo $item["USRCODE"]; ?>" onclick="deleteRow();">
                                                <i class="icon-trash bigger-120"></i>
                                            </button>
                                        </div>
                                        <div class="hidden-desktop visible-phone">
                                            <div class="inline position-relative">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="form_user_open tooltip-info" data-rel="tooltip" title="Edit" data-placement="left">
                                                            <span class="blue">
                                                                <i class="icon-edit"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" id="link-delete-<?php echo $item["USRCODE"]; ?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left">
                                                            <span class="red">
                                                                <i class="icon-trash"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++;?>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="form_user" class="well">
                    <button  class="btn btn-danger btn-mini form_user_close">
                        <i class="icon-remove bigger-110 icon-only"></i>
                    </button>
                    <?php $this->load->view("pages/backend/sys01b_user", $param_form_user);?>
                </div>
            </div>
        </div><!--/row-->
        <!--PAGE CONTENT ENDS HERE-->
    </div><!--/row-->
</div><!--/#page-content-->
<script>
    
</script>