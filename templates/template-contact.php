<?php
/*
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="row ba-page-contact">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?><!-- BEGIN of Post -->
			<div class="large-12 medium-12 small-12 columns ba-map">
				<h1 class="page_title"><?php the_title(); ?></h1>
				<?php echo do_shortcode("[huge_it_maps id='1']"); ?>
			</div>
			<div class="large-4 medium-4 small-12 columns">
				<article <?php post_class('ba-contact-info'); ?>>
					<h3>Контактная информация</h3>
					<?php if ( has_post_thumbnail()) : ?>
						<div title="<?php the_title_attribute(); ?>" class="th">
							<?php the_post_thumbnail(); ?>
						</div><!-- END of .th -->
					<?php endif; ?>
					<?php the_content(); ?>
				</article>
			</div><!-- END of .columns -->
			<div class="medium-8 small-12 columns">
				<h3>Контактная форма</h3>
				<?php echo do_shortcode("[contact-form-7 id='118' title='form-1']" ); ?>
				<script type="text/javascript">
					$name = $('#form-name');
			        jQuery('#form-name').attr("placeholder", "Имя*");
			        jQuery('#form-email').attr("placeholder", "email*");
			        jQuery('#form-phonetext').attr("placeholder", "Номер телефона*");
			        jQuery('#form-name').attr("placeholder", "Сообщение*");
			        console.log(name);
			        document.getElementById('form-name').value = 'val';
				</script>
			</div>
		<?php endwhile; ?><!-- END of Post -->
	<?php endif; ?>
	<!-- <div class="large-4 medium-4 small-12 columns sidebar"> -->
	<?php //get_sidebar('right'); ?>
	<!-- </div> -->
	<!-- END of .columns.sidebar -->
</div><!-- END of .row-->

<?php get_footer(); ?>