<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?> - Trashfish Admin</title>

        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        
        <!--basic[bootstrap] styles-->
        <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap-responsive.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."font-awesome.min.css");?>">
        
        <link rel="stylesheet" href="<?php echo base_url(CSS."jquery-ui-1.10.3.custom.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."chosen.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."datepicker.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap-timepicker.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."daterangepicker.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."colorpicker.css");?>">
        
        <link rel="stylesheet" href="<?php echo base_url(CSS."global.css");?>">
        
        <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo base_url(CSS."font-awesome-ie7.min.css");?>">
        <![endif]-->

        <!--page specific plugin styles-->
        <?php foreach($css as $style):?>
        <link rel="stylesheet" href="<?php echo base_url().CSS.$style; ?>">
        <?php endforeach;?>
        <!--fonts-->
        <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>-->
        <link rel="stylesheet" href="<?php echo base_url(FONT."Open_Sans/css.css")?>"/>

        <!--trashfish styles-->
        <link rel="stylesheet" href="<?php echo base_url(CSS."trashfish-skin-back/trashfish-skin-back-flatlight/trashfish.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."trashfish-skin-back/trashfish-skin-back-flatlight/trashfish-responsive.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."trashfish-skin-back/trashfish-skin-back-flatlight/trashfish-skins.min.css");?>">
        
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?php echo base_url(CSS."trashfish-skin-back/trashfish-skin-back-flatlight/trashfish-ie.min.css");?>">
        <![endif]-->

        <!--inline styles if any-->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script type="text/javascript">
                window.jQuery || document.write("<script src='<?php echo base_url(JS."jquery-1.9.1.min.js"); ?>'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url(JS."jquery-ui-1.10.3.custom.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.dataTables.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.dataTables.bootstrap.js"); ?>"></script>
        
    </head>

    <body class="navbar-fixed">
        
        <?php echo $body; ?>

        <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>

        <!--basic scripts-->
        <script src="<?php echo base_url(JS."bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.popupoverlay.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.ui.touch-punch.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.slimscroll.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."chosen.jquery.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."bootbox.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."fuelux/fuelux.spinner.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."date-time/moment.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."date-time/bootstrap-datepicker.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."date-time/bootstrap-timepicker.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."date-time/daterangepicker.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."bootstrap-colorpicker.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.knob.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.autosize-min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.inputlimiter.1.3.1.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."jquery.maskedinput.min.js"); ?>"></script>
        
        <script src="<?php echo base_url(JS."global.js"); ?>"></script>
        
        <!--page specific plugin scripts-->

        <?php foreach($javascript as $js):
            if (is_array($js)):?>
        <script defer <?php foreach ($js as $key => $value){ echo $key.'="'.$value.'" '; }?>></script>
            <?php else:?>
        <script defer src="<?php echo base_url(JS.$js); ?>"></script>
            <?php endif;
	endforeach;?>
        
        <!--[if lte IE 8]>
          <script src="/js/"></script>
        <![endif]-->

        <!--trashfish scripts-->
        <script src="<?php echo base_url(JS."trashfish-script-back/trashfish-elements.min.js"); ?>"></script>
        <script src="<?php echo base_url(JS."trashfish-script-back/trashfish.min.js"); ?>"></script>

        <!--inline scripts related to this page-->
    </body>
</html>
