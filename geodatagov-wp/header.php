<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */


?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo(get_bloginfo('template_directory') .'/images/icons/geodatagovgr.ico')?>" type="image/x-icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header class="account-masthead" role="banner">

    <div class="container">
        <div id="mainlogo">
        <hgroup class="header-image">
        <a class="logo" href="/"><img src= "<?php echo(get_bloginfo('template_directory') .'/images/geodata-logo.png')?>" alt="Public Open Data Logo" Logo" title="Public Open Data Logo" /></a>
        </hgroup>
     </div>
        <div class="mainmenu">
        <nav class="section navigation">
          <ul class="nav nav-pills">
    <?php echo create_geodata_menu() ?>
            
        </ul>
        </nav>
        </div>
        <div class="account avatar">
            <ul class="user-menu">
                <!-- <?php echo create_language_menu() ?> -->
                <?php echo create_pll_language_menu() ?>
            </ul>
        </div>

    </header>


    <div id="menu-block-home" class="container">
        <?php echo create_geodata_group_menu() ?>     
    </div>

        <div class="feedback-form">

   <?php $lang = substr(pll_current_language("locale"), 0, 2); ?>
            <?php if ($lang == 'el'){
			$feedback_form = "https://docs.google.com/forms/d/1T9gBjo9GTzElMB6qwTM7fGTb79u4ftB8BLj8c2kKthA/viewform?formkey=dFdSbXBKX3Q4eFVKTU1ocHhiTWdiOXc6MQ&hl=el";
			}
		  else{
			$feedback_form = "https://docs.google.com/forms/d/1_biYR042tPc7bvQ7UimOVCFTvRLFjuh5BH3SwegfIgI/viewform";
			} ?>
		
    <a href="<?php echo $feedback_form ?>"  target="_blank">
                <button  class="btn btn-primary"><?php _e(' Leave your feedback', 'twentythirteen')?></button></a>
    <a href="http://www.imis.athena-innovation.gr"><div class="imis-logo-side"></div></a>
        </div>


