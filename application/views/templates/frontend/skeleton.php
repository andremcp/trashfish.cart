<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Trashfish Cart - <?php echo $title; ?></title>

        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        
        <!--fonts-->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" media="all">
        
        <!--basic[bootstrap] styles-->
        <link rel="stylesheet" href="<?php echo base_url(CSS."buttons/social-icons.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."buttons/buttons/animation.css");?>">
        
        <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo base_url(CSS."buttons/social-icons-ie7.css");?>">
        <![endif]-->
        
        <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap.css");?>" media="screen">
     
        <!--page specific plugin styles-->
        <?php foreach($css as $style):?>
        <link rel="stylesheet" href="<?php echo base_url().CSS.$style; ?>">
        <?php endforeach;?>
        
        <!--trashfish styles-->
        <link rel="stylesheet" href="<?php echo base_url(CSS."trashfish-skin-front/trashfish-skin-front-flatlight/style.css");?>">
        <link rel="stylesheet" href="<?php echo base_url(CSS."trashfish-skin-front/trashfish-skin-front-flatlight/media.css");?>">
        
        <!--[if lt IE 9]>
            <script src="<?php echo base_url(JS."html5shiv.js"); ?>"></script>
        <![endif]-->
        <!--[if (gte IE 6)&(lte IE 8)]>
            <script type="text/javascript" src="<?php echo base_url(JS."selectivizr-min.js"); ?>"></script>
        <![endif]-->
    </head>

    <body>
        
        <?php echo $body; ?>

        <div class="container footer-second">
            <div class="row">
                <div class="span3">Copyright &copy; Trashfish., 2012</div>
                <address class="span3 img adress">Avenue of the American Ind.,<br> st.133/2, New York City, USA</address>
                <div class="span3 img phone"><span>Call Us:</span> +38 (097) 989-55-55<br> <span>or</span> 38 (099) 123-55-55</div>
                <div class="span3 payments">
                    <img src="<?php echo base_url(IMG."visa.png");?>" alt="Visa logo">
                    <img src="<?php echo base_url(IMG."paypal.png");?>" alt="PayPal logo">
                    <img src="<?php echo base_url(IMG."mastercard.png");?>" alt="MasterCard logo">
                    <img src="<?php echo base_url(IMG."westernunion.png");?>" alt="WesternUnion logo">
                </div>
            </div>
        </div>
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="<?php echo base_url(JS."jquery.min.js")?>"></script>
        <script src="<?php echo base_url(JS."bootstrap.js")?>"></script>
        <script src="<?php echo base_url(JS."jquery.formstyler.js")?>"></script>
        <script src="<?php echo base_url(JS."jquery.carouFredSel-6.2.0-packed.js")?>"></script>
        <script src="<?php echo base_url(JS."jquery.touchSwipe.min.js")?>"></script>
        <script src="<?php echo base_url(JS."jquery.cookie.js")?>"></script>
        <script src="<?php echo base_url(JS."jquery.minicolors.js")?>"></script>

        <!--trashfish scripts-->

        <script src="<?php echo base_url(JS."trashfish-script-front/trashfish.script.js")?>"></script>
        
        <!--page specific plugin scripts-->
        <?php foreach($javascript as $js):?>
	<script defer src="<?php echo base_url().JS.$js; ?>"></script>
	<?php endforeach;?>
        
        <!--[if lte IE 8]>
          <script src="/js/"></script>
        <![endif]-->
    </body>
</html>
