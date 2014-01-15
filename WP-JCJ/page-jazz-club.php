<?php
/*
Template Name: Jazz Clubs
*/
?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.0
 */

get_header(); ?>
	<div id="content" class="large-8 columns" role="main">
    	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumbs">','</ul>'); } ?>
    	<?php if(is_page(214) ) { // jazz_club_main ?>
			<div id="map-container-huge">
				<?php
				global $mappress;
				$atts = array("width"=>630, "height"=>350, "show"=>"query", "show_query"=>"posts_per_page=50&tag=jazz-club", "marker_title"=>"post", "marker_body"=>"excerpt&thumbnail", "center_lat"=>"29","center_lng"=>"15", "zoom"=>"1");
				echo $mappress->shortcode_mashup($atts);
				?>
			</div>				
		<?php } ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-world', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>