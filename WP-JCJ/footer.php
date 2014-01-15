<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.0
 */
?>
	</section><!-- #main .wrapper -->
    
	<?php
        if ( ! is_404() )
        get_sidebar( 'footer' );
    ?>    
        
	<footer id="footer" class="row" role="contentinfo">

        <div class="large-7 columns">
        
        	<?php wp_nav_menu( array(
            	'theme_location' => 'secondary',
                'container' => false,
                'menu_class' => 'inline-list left',
                'fallback_cb' => false
            ) ); ?>
                
       	</div><!-- .seven columns -->
             
		<div id="ftxt" class="site-info large-5 columns">
        
			<?php if ( get_theme_mod('wpforge_footer_text') ) : echo get_theme_mod( 'wpforge_footer_text'); else : ?>
			<p>&copy; <?php echo date('Y'); ?> | <?php _e('Hand crafted by','wpforge'); ?> <a href="http://jazzclubjury.com" rel="nofollow" title="You Be The Judge">Jazz Club Jury</a> | Brought to you by <a href="http://jazzinterlude.com" rel="nofollow" title="Bringing You A World Of Jazz">Jazz Interlude</a></p>               
            <?php endif; ?>
            
		</div><!-- .site-info -->

	</footer><!-- .row -->
    
    </div><!-- #wrapper -->
    
    <div id="backtotop">Top</div><!-- #backtotop -->

<?php wp_footer(); ?>
<!--
<script type="text/javascript">
  jQuery(function($){
    $("body").bgStretcher({
      images: ["images/bg.jpg", "images/bg2.jpg", "images/bg3.jpg"], 
      imageWidth: 1024,
      imageHeight: 680,
    }); 
  }); 
  
</script>
-->
</body>
</html>