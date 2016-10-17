<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
<section class="ba-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
		?>
		<div class="ba-shipping text-center" style="background-image: url('<?php echo $image; ?>'); background-size:cover">
			<!-- <h1><?php the_title() ?></h1> -->
			<?php the_content(); ?>
			<a href=" <?php the_field('baner_button_link')?>" class="button  text-center">
				<?php the_field('baner_button_text') ?>
			</a>
		</div>

	<?php endwhile; ?>


<?php endif; ?>
</section>

<?php
$benefiterArgs = array(
	'post_type'=>'benefiter',
	'posts_per_page'=>-1,

	);
	$benefiter = new WP_Query($benefiterArgs);?>
	<?php if($benefiter->have_posts()): ?>
		<section class="ba-benefits text-center ">
			<div class="row">
				<div class="columns">
					<h2 class="ba-benefits__title"> <?php the_field('benefits_title') ?> </h2>
					<?php while($benefiter->have_posts()): $benefiter->the_post() ?>
						<div class="ba-benefits__item columns medium-3 ">
							<?php the_post_thumbnail('team') ?>
							<h4> <?php the_title() ?> </h4>
							<p><?php the_content()?></p>

						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
	<?php endif;?>



	<!--HOME PAGE SLIDER-->
	<div class="ba-slider">
		<h2><?php the_field('title_on_slider') ?></h2>
		<p><?php the_field('text_on_slider') ?></p>
		<?php echo home_slider_template(); ?>
		<!--END of HOME PAGE SLIDER-->
	</div>
	<section class="ba-contacts ">
		<div class="row ">
			<h3 class="text-center"><?php the_field('contact_title') ?></h3>
			<div class="columns text-center">
				<?php the_field('contact_form') ?>
			</div>
		</div>
	</section>

	<section class="ba-map">
		<?php if( $location = get_field('map')):?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		<?php endif; ?>
	</section>






	<?php get_footer(); ?>
