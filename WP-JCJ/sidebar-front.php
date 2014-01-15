<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.0
 */

/*
 * The front page widget area will display if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, nothing happens.
 */
if ( ! is_active_sidebar( 'csidebar-1' ))
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="large-4 columns widget-area" role="complementary">
		<?php if ( is_active_sidebar( 'csidebar-1' ) ) : ?>
        <div class="<?php wpforge_front_sidebar_class(); ?> columns">
            <?php dynamic_sidebar( 'csidebar-1' ); ?>
        </div><!-- .first -->
        <?php endif; ?>
    
        <!--
<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
        <div class="<?php wpforge_front_sidebar_class(); ?> columns">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
--><!-- .second -->
<!--         <?php endif; ?> -->
    
	</div><!-- /columns -->    
            
</div><!-- #secondary -->