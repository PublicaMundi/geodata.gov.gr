<?php
/**
 * Template Name: Side Menu
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div class="toolbar">
        <div class="container">
        <ol class="breadcrumb">
            <?php echo create_breadcrumb(); ?>
        </ol>
        </div>
    </div>                

<div role="main" class="site-main">

<div id="content" class="container">
    <div class="gap"></div>
<div class="wrapper">
  <div class="primary">
  <article class="module">
    <div class="module-content">

		<?php while ( have_posts() ) : the_post(); ?>
            <h1 class="page-heading"><?php the_title() ?></h1>
            <?php the_content() ?>   
                <footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
        <?php endwhile ?>
</div>
    </article>
</div>

<aside class="secondary about-secondary paintme">
        <section class="module module-narrow module-shallow">
        <?php global $post; 
            if ($post->post_parent): ?>
        <h2 class="module-heading"><?php echo get_the_title($post->post_parent) ?></h2>
            <?php else: ?> 
        <h2 class="module-heading"><?php echo get_the_title($post->ID) ?></h2>
        <?php endif ?>
        <nav>
            <?php echo create_side_menu() ?>        
        </nav>
</section>

</aside>    

</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
