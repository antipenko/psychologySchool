<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
<section class="ba-main">
	<div class="row">
	<div class="columns ba-description text-center">
		<p class="ba-description__text">
			<?php the_field('description-text') ?>
		</p>
	</div>
	</div>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
		?>
		<div class=" text-center" style="background-image: url('<?php echo $image; ?>'); background-size:cover">
			<!-- <h1><?php the_title() ?></h1>
			<?php the_content(); ?>
			<a href=" <?php the_field('baner_button_link')?>" class="button  text-center">
				<?php the_field('baner_button_text') ?>
			</a> -->
		</div>

	<?php endwhile; ?>


<?php endif; ?>
</section>


<?php 
$eventArgs = array(
	'post_type'=>'event',
	'posts_per_page'=>6,
	'orderby'=>'date'
);
	$event = new WP_Query($eventArgs);?>
	<?php if($event->have_posts()): ?>
		<section class="ba-events">
			<div class="row columns text-center">
				<h2>Наши мероприятия</h2>
				<div class="ba-events-list">
					<?php while($event->have_posts()): $event->the_post() ?>
						<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
						<article class="ba-event" style="background-image: url('<?php echo $image; ?>'); background-size:cover">
							<h1 class="ba-event__title"> <?php the_title(); ?> </h1>
							<p class="ba-event__description"><?php the_content(); ?></p>
							<datetime class="ba-event__date"><?php the_field('event-date'); ?></datetime>
						</article>
					<?php endwhile; ?>
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
