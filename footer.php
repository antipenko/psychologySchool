<?php
/**
 * Footer
 */
?>

<footer class="footer text-center">
	<div class="row">
		<div class="columns text-center">
			<img src="<?php the_field('footer_logo', 'options') ?>">
			<p><?php the_field('footer_text', 'options') ?></p>
			<p><?php the_field('footer_copyright', 'options') ?></p>
		</div><!-- END of .columns -->
	</div><!-- END of .row -->
</footer><!-- END of  Footer -->

<?php wp_footer(); ?>
</body>
</html>
