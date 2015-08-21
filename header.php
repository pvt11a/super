<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="author" content="" />
    <meta name="copyright" content=""/>
    <meta name="keywords" content=" "/>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="pvt" />
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/searchbtn.PNG"/>
    <?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php } ?>
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/default.css" type="text/css" media="screen" />  
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.marquee.min.js" type="text/javascript"></script>
    
    
</head>

<body <?php body_class(); ?>>

<div id="tm_wrapper">
<div id="tm_wrap">
    <header>
        <img src="<?php echo bloginfo('template_directory'); ?>/images/bg_head_top.jpg"  />
    </header><!--end header-->
    <nav>
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container'=>'',
                'fallback_cb' => 'alert_menu'
                )
        );
    
    ?>       
        
    </nav><!--end nav-->
    <nav id="tm_box_menu">
        <form>
            <input type="text" name="s" placeholder="Tìm kiếm" id="s_txt"/>
            
        </form> 
            <img id="img_btn" src="<?php echo bloginfo('template_directory'); ?>/images/img_left_panel.gif" width="44" height="44" />
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'box-menu',
                        'container'=>'',
                        'fallback_cb' => 'alert_menu'
                        )
                );
            
            ?>  
        
    </nav>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    