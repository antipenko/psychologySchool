<?php
/*
 * Template Name: Events Page
 */
get_header();?>
<div class="row ">
	<div class="large-8 medium-8 small-12 columns">

		<?php 
		$eventArgs = array(
			'post_type'=>'event',
			'posts_per_page'=>-1,
			'orderby'=>'date'
		);
			$event = new WP_Query($eventArgs);?>
			<?php if($event->have_posts()): ?>
				<?php while($event->have_posts()): $event->the_post() ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('ba-article'); ?>>
					<h3 class="ba-article__title">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'foundation'), the_title_attribute('echo=0'))); ?>" class="ba-article__link" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h3>
					<?php if (is_sticky()) : ?>
						<span class="right radius secondary label"><?php _e('Sticky', 'foundation'); ?></span>
					<?php endif; ?>
					<h6>Written by <?php the_author_link(); ?> on <?php the_time(get_option('date_format')); ?></h6>
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('blog-article'); ?>
						</a>
					<?php endif; ?>
					<?php $article = get_the_content(); ?>
					<p>
						<?php echo wp_trim_words($article, 25); ?>
					</p>
					<a href="<?php the_permalink(); ?>" class='button ba-button_more'>Читать далее</a>
					<!-- Use wp_trim_words() instead if you need specific number of words -->
				</article>
				<?php endwhile; ?>
			<?php endif;?>
		 

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?><!-- BEGIN of Post -->
				<article id="post-<?php the_ID(); ?>" <?php post_class('ba-article'); ?>>
					<h3 class="ba-article__title">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'foundation'), the_title_attribute('echo=0'))); ?>" class="ba-article__link" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h3>
					<?php if (is_sticky()) : ?>
						<span class="right radius secondary label"><?php _e('Sticky', 'foundation'); ?></span>
					<?php endif; ?>
					<h6>Written by <?php the_author_link(); ?> on <?php the_time(get_option('date_format')); ?></h6>
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('blog-article'); ?>
						</a>
					<?php endif; ?>
					<?php $article = get_the_content(); ?>
					<p>
						<?php echo wp_trim_words($article, 25); ?>
					</p>
					<a href="<?php the_permalink(); ?>" class='button ba-button_more'>Читать далее</a>
					<!-- Use wp_trim_words() instead if you need specific number of words -->
				</article>
			<?php endwhile; ?><!-- END of Post -->
		<?php endif; ?>
		<div class="pagination">
			<?php foundation_pagination(); ?>
		</div><!-- END of .pagination -->
	</div><!-- END of .columns -->
	<div class="large-4 medium-4 small-12 columns sidebar">
		<?php get_sidebar('right'); ?>
	</div><!-- END of .columns.sidebar -->
</div><!-- END of .row-->
<?php get_footer(); ?>