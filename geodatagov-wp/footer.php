<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<footer class="site-footer">
  <div class="container">

    <div class="quarter">
        <ul class="unstyled"> 
            <li>
                <form class="section site-search simple-input" action="/dataset" method="get">
                    <div class="field">
                    <label for="field-sitewide-search">Search Datasets</label>
                    <input id="field-sitewide-search" type="text" name="q" placeholder="<?php _e('Search datasets...' , 'twentythirteen');?>" />
                    <button class="btn-search" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </li>
            <li>
                <a class="logo" href="/"><img src= "<?php echo(get_bloginfo('template_directory') .'/images/geodata-logo.png')?>" alt="Public Open Data Logo" title="Public Open Data Logo" /></a>
            </li>
        </ul>

    </div>

        <div class="quarter footer-links">
            <ul class="unstyled">
            <?php echo create_geodata_menu() ?>
                        
            </ul>
        </div>
        
        <div class="quarter footer-links">
            <ul class="unstyled">
            <li><a href="http://www.imis.athena-innovation.gr"><?php _e('IMIS', 'twentythirteen') ?></a></li>
            <li><a href="http://inspire.ec.europa.eu/"><?php _e('INSPIRE') ?></a></li>
            <li><a href="http://open-data.europa.eu/en/data/"><?php _e('EU Open Data Portal') ?></a></li>            
            </ul>
        </div>

        <div class="quarter footer-links">
            <ul class="unstyled">
            <li><a href="http://www.publicamundi.eu">PublicaMundi</a></li>
            <li><a href="https://twitter.com/geodatagovgr">Twitter</a></li>
            <li><a href="https://github.com/PublicaMundi">Github</a></li>
            <li><a href="<?php echo get_permalink(pll_get_post(get_about_id_en())) ?>contact"><?php _e('Contact', 'twentythirteen') ?></a></li>
            <li><a href="https://github.com/PublicaMundi/geodata.gov.gr/issues/new"><?php _e('Report issue', 'twentythirteen') ?></a></li>

            </ul>
        </div>   
      

	</div><!-- #page -->

</body>
</html>
