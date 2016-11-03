<?php
/**
 * Footer
 */
?>
</div>
<footer class="footer ba-section text-center">
	<div class="row">
		<div class="columns medium-4 text-center">
			<?php if ( is_active_sidebar( 'foundation_footer-sidebar' ) ) : ?>

				<?php dynamic_sidebar( 'foundation_footer-sidebar' ); ?>

			<?php endif; ?>
		</div><!-- END of .columns -->
		<div class="columns medium-4 text-center ">
			<aside class="widget widget-contact text-center">
				<h3>Контакты</h3>
				<p>
					<a href="mailto: <?php the_field('contact-email', 'option') ?> "><?php the_field('contact-email', 'option'); ?></a> 
				</p>
				<p>
					<a href="tel: <?php the_field('contact-phone', 'option') ?>"><?php the_field('contact-phone', 'option');?></a>
				<div class="ba-socials">
				</p>
					<a href="<?php the_field('contact-fb', 'option');?>" class='ba-socials__link ba-socials__link-fb' target="_blank"></a>
					<a href="<?php the_field('contact-tw', 'option');?>" class='ba-socials__link ba-socials__link-tw' target="_blank"></a>
					<a href="<?php the_field('contact-inst', 'option');?>" class='ba-socials__link ba-socials__link-inst' target="_blank"></a>
					<a href="<?php the_field('contact-vk', 'option');?>" class='ba-socials__link ba-socials__link-vk' target="_blank"></a>
				</div>
			</aside>
		</div><!-- END of .columns -->


		<div class="columns medium-4 text-center">
			<aside class="widget widget-adres text-center">
				<h3 >Адрес</h3>
				<p>
					<?php the_field('contact-adres', 'option'); ?>
				</p>
			</aside>
		</div><!-- END of .columns -->
	</div><!-- END of .row -->

		<p class="text-center ba-copyright">
			Разработан 
			<a href="https://antipenko.github.io/foini" target="_blanc"><img src=" <?php bloginfo('url');?>/wp-content/themes/school/images/copy.png" alt="adVine"> </a>
		</p>
</footer><!-- END of  Footer -->

<?php wp_footer(); ?>
</body>
</html>
