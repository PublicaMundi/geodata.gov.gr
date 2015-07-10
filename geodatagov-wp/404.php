<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
            <div class="toolbar">
                <div class="container">
                <ol class="breadcrumb">
                    <?php echo create_breadcrumb(); ?>
                </ol>
                </div>
            </div>                

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
			</header>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
