<div class="widget-box transparent">
    <script type="text/javascript">
        $(function(){
            var data = [
                <?php 
                foreach ($trashfishchart->rows as $row):
                    foreach($trashfishchart->columns as $key => $column):
                        $percentage = $row->{$column->percentage};
                        echo '{ label: \t"'.$column->label.'", \tdata: \t'.$percentage.', \t\tcolor: \t"'.$column->color.'"},\n';
                    endforeach;
                endforeach;
                ?>
            ];

            var placeholder = $('#<?php echo 'piechart-placeholder-'.$trashfishchart->id;?>').css({'width':'90%' , 'min-height':'150px'});
            $.plot(placeholder, data, {

                series: {
                    pie: {
                        show: true,
                              tilt:0.8,
                              highlight: {
                                      opacity: 0.25
                              },
                              stroke: {
                                      color: '#fff',
                                      width: 2
                              },
                              startAngle: 2

                    }
                },
                legend: {
                    show: true,
                          position: "ne", 
                          labelBoxBorderColor: null,
                          margin:[-30,15]
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                tooltip: true, //activate tooltip
                tooltipOpts: {
                    content: "%s : %y.1",
                    shifts: {
                            x: -30,
                            y: -50
                    }
                }

           });
        });
    </script>
    <div class="widget-header widget-header-flat">
        <h4 class="lighter">
            <i class="<?php echo $trashfishchart->icon;?>"></i>
            <?php echo $trashfishchart->title;?>
        </h4>

        <div class="widget-toolbar no-border">
            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                <?php echo $trashfishchart->order_select;?>
                <i class="icon-angle-down icon-on-right"></i>
            </button>
            
            <ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
                <?php foreach ($trashfishchart->orders as $key => $order):?>
                <li class="<?php echo $order->class;?>">
                    <a href="#"><?php echo $order->list;?></a>
                </li>
                <?php endforeach;?>
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
            <div id="<?php echo 'piechart-placeholder-'.$trashfishchart->id;?>"></div>
        </div>
    </div>
</div>