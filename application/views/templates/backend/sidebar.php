<div id="sidebar" class="fixed">
    <div id="sidebar-shortcuts">
        <div id="sidebar-shortcuts-large">
            <a class="btn btn-small btn-success" href="<?php echo base_url();?>">
                <i class="icon-eye-open"></i>
            </a>

            <button class="btn btn-small btn-info">
                <i class="icon-pencil"></i>
            </button>

            <button class="btn btn-small btn-warning">
                <i class="icon-group"></i>
            </button>

            <button class="btn btn-small btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!--#sidebar-shortcuts-->

    <?php echo $nav; ?>

    <div id="sidebar-collapse">
        <i class="icon-double-angle-left"></i>
    </div>
</div>