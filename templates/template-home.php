<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
<section class="ba-main ba-section">
	<div class="row">
		<div class="columns ba-description text-center">
			<p class="ba-description__text">
				<?php the_field('description-text') ?>
			</p>
		</div>
	</div>
</section>


<?php 
$eventArgs = array(
	'post_type'=>'event',
	'posts_per_page'=>6,
	'orderby'=>'date'
	);
	$event = new WP_Query($eventArgs);?>
	<?php if($event->have_posts()): ?>
		<section class="ba-events ba-section">
			<div class="row ">
				<div class="columns text-center">
					<h2 class="ba-title">Наши мероприятия</h2>
					<div class="ba-events-list">
						<?php while($event->have_posts()): $event->the_post() ?>
							<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
							<article class="ba-event" style="background-image: url('<?php echo $image; ?>'); background-size:cover">
								<a href=" <?php the_permalink(); ?>" class='ba-event__link'>
									<datetime class="ba-event__date"><?php the_field('event-date'); ?></datetime>
									<div class="ba-event-info">
										<h1 class="ba-event__title"> <?php the_title(); ?> </h1>
										<?php the_excerpt(); ?>
									</div>
								</a>
							</article>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!--HOME PAGE SLIDER-->
	<div class="ba-slider">
		<?php echo home_slider_template(); ?>
	</div>
	<!--END of HOME PAGE SLIDER-->

	<!--
		 section with anons future courses or other information about company.
		 Now this is section have name "ba-course", but after meet with customer
		 this sectin be able to change and in Wordpress too
		 START BA-COURSE
		-->
		<section class="ba-course ba-section">
			<div class="row">
				<div class="columns medium-6">
					<?php 
					$image = get_field('course-img');
					if( !empty($image) ): ?>
					<img  class='ba-course__img' src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
			</div>

			<div class="columns medium-6">
				<h2 class="ba-course__title ba-title"> <?php the_field('course-name'); ?> </h2>
				<?php the_field('course-description'); ?>
				<a href=" <?php the_field('course-link'); ?> " class='button ba-course__button'>Читать дальше</a>
			</div>
		</div>
	</section>
	
	<section class="ba-clients ba-section text-center">
		<div class="row">
			<div class="columns">
				<h2 class="ba-title">
					<?php the_field('clients'); ?>
				</h2>
				<?php the_field('clients-description'); ?>
			
			<!-- START DISPLAY LOGO CLIENTS  -->
			<div class="ba-clients-list">
				<?php if( have_rows('clients-repeater') ): ?>
						<?php while( have_rows('clients-repeater') ): the_row(); 
						$image = get_sub_field('client-logo');
						?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<!-- END DISPLAY LOGO CLIENTS  -->

		</div>
	</div>
</section>
<!-- END BA-COURSE -->
<section class="ba-contacts ba-section text-center">
	<div class="row ">
	<div class="columns">
		<!-- <h3 class="text-center"><?php //the_field('contact_title') ?></h3>
		<div class="columns text-center">
			<?php //the_field('contact_form') ?>
		</div> -->

		<h2 class="ba-title ba-contacts__title">
			Check Out Our Monthly Promotions!
		</h2>
		<a href="#" class="button ba-contacts__button">Жми сюда</a>
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
