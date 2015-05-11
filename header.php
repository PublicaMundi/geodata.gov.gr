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
            <li>
              <a href="<?php echo get_active_locale()['code']?>/dataset" >  <?php _e('Datasets' , 'twentythirteen'); ?></a>
            </li>
            <li>
              <a href="<?php echo get_active_locale()['code']?>/group"> <?php _e('Topics' , 'twentythirteen'); ?> </a>
            </li>
            <li>
              <a href="<?php echo get_active_locale()['code']?>/organization">  <?php _e('Organizations' , 'twentythirteen'); ?> </a>
            </li>
            <li>
              <a href="<?php echo get_active_locale()['code']?>/maps"> <?php _e('Maps' , 'twentythirteen'); ?> </a>
            </li>
            <li>
              <a href="/news?lang=<?php echo get_active_locale()['code']?>"> <?php _e('News' , 'twentythirteen'); ?> </a>
            </li>

            <li>
              <a href="<?php echo get_active_locale()['code']?>/about"> <?php _e('About' , 'twentythirteen'); ?> </a>
            </li>

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
        
    <ul class="icons-grid">

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/utilities-communication">
    
        <img src=" <?php echo(get_bloginfo('template_directory') .'/images/groups/utilities-communication.png')?>" alt="utilities-communication" class="menu-image">
        <span class="menu-heading"><?php _e('Utilities - Communication' , 'twentythirteen'); ?></span>
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/transportation">
    
        <img src=" <?php echo(get_bloginfo('template_directory') .'/images/groups/transportation.png')?>" alt="transportation" class="menu-image">
    
        <span class="menu-heading"><?php _e('Transportation' , 'twentythirteen'); ?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/structure">
    
        <img src= "<?php echo(get_bloginfo('template_directory') .'/images/groups/structure.png')?>" alt="structure" class="menu-image">
    
        <span class="menu-heading"><?php _e('Structure' , 'twentythirteen'); ?></span>
    </a>
    </li>
    
    <li class="clearfix js-hide"></li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/society">
    
        <img src= "<?php echo(get_bloginfo('template_directory') .'/images/groups/society.png')?>" alt="society" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Society' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/planning-cadastre">
    
        <img src= "<?php echo(get_bloginfo('template_directory') .'/images/groups/cadastre.png')?>" alt="planning-cadastre" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Planning Cadastre' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/oceans">
    
        <img src= "<?php echo(get_bloginfo('template_directory') .'/images/groups/oceans.png')?>" alt="oceans" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Oceans' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="clearfix js-hide"></li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/location">
    
        <img src= "<?php echo(get_bloginfo('template_directory') .'/images/groups/location.png')?>" alt="location" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Location' , 'twentythirteen');?></span>
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/intelligence-military">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/military-intelligence.png')?>" alt="intelligence-military" class="menu-image">
        <span class="menu-heading"> <?php _e('Intelligence - Military' , 'twentythirteen');?></span>
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/inland-waters">
    
        <img src= "<?php echo(get_bloginfo('template_directory') .'/images/groups/inland-waters.png')?>"alt="inland-waters" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Inland Waters' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="clearfix js-hide"></li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/imagery-base-maps-earth-cover">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/imagery-maps.png')?>" alt="imagery-base-maps-earth-cover" class="menu-image">
        <span class="menu-heading"> <?php _e('Imagery Base Maps Earth Cover' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/health">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/health.png')?>" alt="health" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Health' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/geoscientific-information">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/geosciences.png')?>" alt="geoscientific-information" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Geoscientific Information' , 'twentythirteen');?></span>
    </a>
    </li>

    <li class="clearfix js-hide"></li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/farming">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/farming.png')?>" alt="farming" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Farming' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/environment">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/environment.png')?>" alt="environment" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Environment' , 'twentythirteen');?></span>
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/elevation">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/altitudes.png')?>" alt="elevation" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Elevation' , 'twentythirteen'); ?></span>
    
    </a>
    </li>

    <li class="clearfix js-hide"></li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/economy">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/economy.png')?>" alt="economy" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Economy' , 'twentythirteen');?></span>
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/climatology-meteorology-atmosphere">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/climate.png')?>" alt="climatology-meteorology-atmosphere" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Meteorology' , 'twentythirteen');?></span>
    
    </a>
    </li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/boundaries">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/boundaries.png')?>" alt="boundaries" class="menu-image">
    
        <span class="menu-heading"><?php echo __('Boundaries', 'twentythirteen'); ?></span>
    
    </a>
    </li>

    <li class="clearfix js-hide"></li>

    <li class="menu-item">
    <a href="<?php echo get_active_locale()['code']?>/group/biota">
    
        <img src="<?php echo(get_bloginfo('template_directory') .'/images/groups/biota.png')?>" alt="biota" class="menu-image">
    
        <span class="menu-heading"> <?php _e('Biota', 'twentythirteen');?></span>
    </a>
    </li>

    </ul>
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
   



