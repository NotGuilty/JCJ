<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in WP-Forge consists of a page content area for adding text, images, video --
 * anything you'd like.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.0
 */

get_header(); ?>
<div class="small-12 large-8 columns" id="background" role="main">
	<div class="row">
		<div class="large-12 columns">
			<div class="slideshow-wrapper">
			    <div class="preloader"></div>
				    <ul data-orbit data-options="animation:fade;">
				        <li>
				           <?php			
								// WP_Query arguments
								$args = array (
									'post_type'  => 'post',
									'category'    => 'jazz journal',
									'posts_per_page' => 1
								);
								// The Query
								$jazzclubs = new WP_Query( $args );
								// The Loop
								if ( $jazzclubs->have_posts() ) {
									while ( $jazzclubs->have_posts() ) {
										$jazzclubs->the_post();
							?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
				            <div class="orbit-caption">
					            <?php the_excerpt() ?>
				            </div>
				            <?php	
									}
								} 
								// Restore original Post Data
								wp_reset_postdata();
							?>
				        </li>
				        <li>
				            <img src="http://placehold.it/650x350">
				            <div class="orbit-caption">
					            
				            </div>
				        </li>
				        <li>
				            <img src="http://placehold.it/650x350">
				            <div class="orbit-caption">
					            
				            </div>
				        </li>
				    </ul>
				</div>
			</div>
		</div>
	<div class="row"><!-- featured club -->
		<div class="large-12 columns" id="featured-club">
		<h2 class="home-title">Jazz Clubs</h2>
	<?php
		$args = array(
			'post_type' => 'jazz clubs',
		   'posts_per_page'  => 1,
		   'meta_key'        => '_featured',
		   'meta_value'      => 'yes'
		);
		$featured_venue = new WP_Query( $args );
	// The Loop
	if ( $featured_venue ) :
		while ( $featured_venue->have_posts() ) :
			$featured_venue->the_post();
	?>	
	<div class="small-4 large-8 columns" id="featured">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?>
						<h5 id="featuredcity"class="h5"><span><?php echo 'Featured';?></span></div>
						<div class="small-4 large-4 columns" id="featured">
						    <div class="excerpt"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt() ?>
							</div>
						</div>
	<?php
	/* echo '<li>' . get_the_title() . '</li>'; */
		endwhile;
	else :
	echo 'No featured venue found.';
	endif;
	/* Restore original Post Data
	 * NB: Because we are using new WP_Query we aren't stomping on the
	 * original $wp_query and it does not need to be reset.
	*/
	wp_reset_postdata();
	?>
	<!-- feature post -->
		</div>
	</div>
	<div class="row" id="home-club">
		<div class="large-12 columns" id="club-post">
			<?php			
				// WP_Query arguments
				$args = array (
					'post_type'  => 'jazz clubs',
					'orderby'    => 'date',
					'posts_per_page' => 3,
				);
				// The Query
				$jazzclubs = new WP_Query( $args );
				// The Loop
				if ( $jazzclubs->have_posts() ) {
					while ( $jazzclubs->have_posts() ) {
						$jazzclubs->the_post();
			?>				
			<div class="club">
				<div class="homethumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
						<h5><span><?php $terms = get_the_terms( $post->ID , 'city' );
															if ( $terms != null ){
															foreach( $terms as $term ) {
															print $term->name ;
															unset($term);
															} } 
														?></span></h5>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<h6><?php the_date('F j Y'); ?></h6>
				    <div class='post-content'><?php the_excerpt() ?>
					</div> 
				</div>
			</div>
				<?php	
						}
					} 
					// Restore original Post Data
					wp_reset_postdata();
				?>
		</div>
	</div>
	<div class="row"><!-- featured club -->
		<div class="large-12 columns" id="featured-club">
		<h2 class="home-title">Jazz Festivals</h2>
			<?php
				$args = array(
					'post_type' => 'jazz festival',
				   'posts_per_page'  => 1,
				   'meta_key'        => '_featured',
				   'meta_value'      => 'yes'
				);
				$featured_venue = new WP_Query( $args );
				
			// The Loop
			if ( $featured_venue ) :
				while ( $featured_venue->have_posts() ) :
					$featured_venue->the_post();
			?>
	<div class="small-4 large-8 columns" id="featured">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?>
						<h5 id="featuredcity"class="h5"><span><?php echo 'Featured';?></span></div>
						<div class="small-4 large-4 columns" id="featured">
						    <div class="excerpt"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt() ?>
							</div>
						</div>
	<?php
		endwhile;
	else :
	echo 'No featured venue found.';
	endif;
	wp_reset_postdata();
	?><!-- feature post -->
		</div>
	</div>
	<div class="row" id="home-fest">
		<div class="large-12 columns" id="fest-post">
			<?php
				// WP_Query arguments
				$args = array (
					'post_type'  => 'jazz festival',
					'orderby'    => 'date',
					'posts_per_page' => 3,
				);
				// The Query
				$jazzfest = new WP_Query( $args );
				// The Loop
				if ( $jazzfest->have_posts() ) {
					while ( $jazzfest->have_posts() ) {
						$jazzfest->the_post();
			?>
			<div class="fest">
				<div class="homethumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
						<h5><span><?php $terms = get_the_terms( $post->ID , 'city' );
																if ( $terms != null ){
																foreach( $terms as $term ) {
																print $term->name ;
																unset($term);
																} } 
															?></span></h5>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<h6><?php the_date('F j Y'); ?></h6>
					    <div class='post-content'><?php the_excerpt() ?>
					    </div> 
					</div>
				</div>
				<?php
					}
				} else {
					// no posts found
				}
				// Restore original Post Data
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="row" id="journal">
		<div class="large-12 columns" id="journal-post">
			<h2 class="home-title">Jazz Files</h2>
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'  => 'post',
						'category'    => 'jazz journal',
						'posts_per_page' => 3,
					);
					// The Query
					$journal = new WP_Query( $args );
					// The Loop
					if ( $journal->have_posts() ) {
						while ( $journal->have_posts() ) {
							$journal->the_post();
				?>
				<div class="jazz-journal">
					<div class="homethumb">
						<!-- <div class="mask"> -->
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
							<h5><span><?php the_category('jazz journal') ?></span></h5>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<h6><?php the_date('F j Y'); ?></h6>
						<div class='post-content'><?php the_excerpt() ?>
						</div> 
					</div>
				</div>
			<?php
				}
			} else {
			}
			wp_reset_postdata();
			?>
		</div>
	</div>		
</div>                                 
<div class="large-4 columns front-content">
	<?php get_sidebar( 'Front Sidebar' ); ?>
</div><!-- /columns -->
<!--
<div>      
<?php get_sidebar( 'front' ); ?>
</div>
<!-- #content -->
        
<?php get_footer(); ?>