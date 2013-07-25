<div class="widget-box transparent ">
    <script type="text/javascript" charset="utf-8">
        $(function(){
            <?php
            echo "\$('#table_data_$trashfishgrid->id').dataTable({".
                "\n\t\t\t\t\"bPaginate\"        \t:".($trashfishgrid->allow_pagination ? 'true' : 'false').', '.
                "\n\t\t\t\t\"bStateSave\"       \t:".($trashfishgrid->allow_state ? 'true' : 'false').', '.
                "\n\t\t\t\t\"bFilter\"          \t:".($trashfishgrid->allow_search ? 'true' : 'false').', '.
                "\n\t\t\t\t\"bLengthChange\"    \t:".($trashfishgrid->allow_changerecord ? 'true' : 'false').', '.
                "\n\t\t\t\t\"bAutoWidth\"       \t:".($trashfishgrid->allow_autowidth ? 'true' : 'false').', '.
                "\n\t\t\t\t\"bSort\"            \t:".($trashfishgrid->allow_sortable ? 'true'.', ' : 'false');
                if ($trashfishgrid->allow_sortable):
                    echo "\n\t\t\t\t\"aoColumns\"  \t:"."[".
                        ($trashfishgrid->allow_selection ? '{ "bSortable" : false}, ' : '');
                    foreach ($trashfishgrid->columns as $column):
                        if (!is_null($column->sortable))
                            echo '{ "bSortable" : '.($column->sortable ? 'true' : 'false').'}, ';
                        else
                            echo 'null, ';
                    endforeach;
                    echo ($trashfishgrid->allow_action ? '{ "bSortable" : false}' : '').
                    "]";
                endif;
            echo "\n\t\t\t});\n";
            ?>
//            $('<?php echo '#btn-new-'.$trashfishgrid->id;?>').click(function(){
                $('<?php echo '#form_dialog_'.$trashfishgrid->id;?>').popup({
                    autozindex  : true,
                    horizontal  : 'center',
                    vertical    : 'middle'
                });
//            });
        });
        
    </script>
    <div class="widget-header">
        <h5 class="bigger lighter">
            <i class="icon-table"></i>
            Table of <?php echo $trashfishgrid->name;?>
        </h5>

        <?php if ($trashfishgrid->allow_action):?>
        <div class="widget-toolbar no-border">
            <button class="<?php echo 'form_dialog_'.$trashfishgrid->id.'_open';?> btn btn-mini btn-success" id="<?php echo 'btn-new-'.$trashfishgrid->id;?>">
                <i class="icon-plus bigger-110 icon-only"></i>
            </button>
            <button class="btn btn-danger btn-mini" id="<?php echo 'btn-delete-all-'.$trashfishgrid->id;?>">
                <i class="icon-trash  bigger-110 icon-only"></i>
            </button>
        </div>
        <?php endif;?>

        <div class="widget-toolbar">
            <a href="#" data-action="reload">
                <i class="icon-refresh"></i>
            </a>

            <a href="#" data-action="collapse">
                <i class="icon-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="widget-body ">
        <div class="widget-main no-padding" data-height="380">
            <table id="<?php echo "table_data_".$trashfishgrid->id;?>" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <?php if ($trashfishgrid->allow_selection):?>
                        <th class="center">
                            <label>
                                <input type="checkbox" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <?php endif;?>
                        
                        <?php foreach ($trashfishgrid->columns as $key => $column):?>
                        <th class="<?php echo $column->class;?>"><?php echo $column->header;?></th>
                        <?php endforeach;?>
                        
                        <?php if ($trashfishgrid->allow_action):?><th></th><?php endif;?>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=0;?>
                    <?php foreach ($trashfishgrid->rows as $rows):?>
                    <tr>
                        <?php if ($trashfishgrid->allow_selection):?>
                        <td class="center">
                            <label>
                                <input type="checkbox" />
                                <span class="lbl"></span>
                            </label>
                        </td>
                        <?php endif;?>

                        <?php foreach ($trashfishgrid->columns as $key => $column):?>
                        <?php $cell = $rows->{$column->field_name_as};?>
                        <td class="<?php echo $column->class;?>"><?php echo $cell;?></td>
                        <?php endforeach;?>
                        
                        <?php if ($trashfishgrid->allow_action):?>
                        <td class="td-actions">
                            <div class="hidden-phone visible-desktop btn-group">
                                <button class="<?php echo 'form_dialog_'.$trashfishgrid->id.'_open';?> btn btn-mini btn-success" id="<?php echo 'btn-edit-'.$trashfishgrid->id.'_'.$i;?>" onclick="setValueAction('edit')">
                                    <i class="icon-edit bigger-120"></i>
                                </button>
                                <button class="btn btn-mini btn-danger" id="<?php echo 'btn-delete-'.$trashfishgrid->id.'_'.$i;?>" onclick="deleteRow();">
                                    <i class="icon-trash bigger-120"></i>
                                </button>
                                <button class="<?php echo 'form_dialog_'.$trashfishgrid->id.'_open';?> btn btn-mini btn-primary" id="<?php echo 'btn-view-'.$trashfishgrid->id.'_'.$i;?>">
                                    <i class="icon-eye-open bigger-120"></i>
                                </button>
                            </div>
                            <div class="hidden-desktop visible-phone">
                                <div class="inline position-relative">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="<?php echo 'form_dialog_'.$trashfishgrid->id.'_open';?> tooltip-info" data-rel="tooltip" title="Edit" data-placement="left">
                                                <span class="green">
                                                    <i class="icon-edit"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" id="<?php echo 'link-delete-'.$trashfishgrid->id.'_'.$i;?>" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left">
                                                <span class="red">
                                                    <i class="icon-trash"></i>
                                                </span>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#" class="<?php echo 'form_dialog_'.$trashfishgrid->id.'_open';?> tooltip-error" id="<?php echo 'link-view-'.$trashfishgrid->id.'_'.$i;?>" data-rel="tooltip" title="View" data-placement="left">
                                                <span class="blue">
                                                    <i class="icon-eye-open"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <?php endif;?>
                    </tr>
                    <?php $i++;?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <?php if ($trashfishgrid->allow_action):?>
            <div id="<?php echo 'form_dialog_'.$trashfishgrid->id;?>" class="well" style="display:none;margin:0.1em;">
                <button  class="btn btn-danger btn-mini <?php echo 'form_dialog_'.$trashfishgrid->id.'_close';?>">
                    <i class="icon-remove bigger-110 icon-only"></i>
                </button>
                <?php $this->load->view("pages/backend/".$trashfishgrid->formdialog->form_view, $trashfishgrid->formdialog);?>
            </div>
        <?php endif;?>
    </div>
</div>


