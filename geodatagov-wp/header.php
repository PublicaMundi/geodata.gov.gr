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
    <?php 
    if( get_option( 'show_on_front' ) == 'page' ) 
        $home_link = get_option('page_for_posts' ) ; 
    else
        $home_link = 0;?>
 
        <ul class="user-menu">
            <li class="language">
            <a href="<?php echo esc_url( add_query_arg(array('p'=>False, 'lang'=> get_active_locale()['code'], 'page_id'=>False, 's'=>False)));  ?>"><span class="down-arrow"><?php echo get_active_locale()['name']; ?></span></a>

    <ul>
    <?php foreach (get_available_locales() as $loc){
        if ($loc['code'] != get_active_locale()['code']){ 
?>
            <li value="<?php $loc['code']?>">
            <a href="<?php echo esc_url( add_query_arg(array('p'=>False, 'lang'=> $loc['code'], 'page_id'=>False, 's'=>False)));  ?>"><span><?php echo $loc['name']?></span></a>

        </li>
<?php }
    }
?>
    </ul>
            </li>
          </ul>
        </div>

    </header>


    <div id="menu-block-home" class="container">
        <?php echo create_geodata_group_menu() ?>     
    </div>

	<div id="page" >

            <div id="main" class="site-main">
                <div class="toolbar">
                    <div class="container">
                    <ol class="breadcrumb">
                        <li class="home">
                            <a href="/">
                                <span></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/news?lang=<?php echo get_active_locale()['code']?>"> <?php _e('News' , 'twentythirteen'); ?> </a>

                        </li>
                    </ol>
                    </div>
                </div>
                
                <div class="searchbar"> 

                            <?php get_search_form(); ?>
                        
                </div>
 
                <div class="feedback-form">
                <a href="https://docs.google.com/forms/d/1_biYR042tPc7bvQ7UimOVCFTvRLFjuh5BH3SwegfIgI/viewform"><button class="btn btn-primary"><?php _e('Leave your feedback')?></button></a>
                </div>
   



