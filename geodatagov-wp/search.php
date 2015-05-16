<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
    <div class="container">
		<div id="content" class="site-content" role="main">
    <?php  
        global $wp_query;

    query_posts(array_merge($wp_query->query_vars, array('post_type' => 'post'))); ?>


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="form-title"><?php printf( __( '%s posts found for: "%s"', 'twentythirteen' ), $wp_query->found_posts, get_search_query() ); ?></div>
			</header>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

        </div><!-- #content -->
    </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
