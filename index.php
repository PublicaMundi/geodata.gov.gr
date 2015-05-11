<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
    	<div id="primary" class="primary content-area">
        <div id="content" class="site-content " role="main">
        <?php  
    global $wp_query;
        $search = the_search_query();
        //$language = pll_current_language();
        //query_posts(array_merge($wp_query->query, array('post_type' => 'post', 'lang' => pll_default_language(), 'q' => $search))); ?>
        <?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            <?php //get translated post (in current language) if exists
            global $post;
            //if ($post_id = pll_get_post($post->ID, $language)){
            //    $post = get_post($post_id);
            //    setup_postdata($post);
            //}
            ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
