<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Add Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,500' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
	<!--[if IE]>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins/html5shiv.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins/respond.js"></script>
		<![endif]-->
	</head>

	<body <?php body_class(); ?>>

		<header class="header ">
			<div class="row large-uncollapse medium-uncollapse small-collapse">
				<div class=" columns">
					<div class="logo small-only-text-center text-center">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('name'); ?>"/></a>
					</div><!--end of .logo -->
				</div><!--end of .columns -->
			</div><!-- END of .row -->

			<div class="row header-info">
				<div class="columns text-center">
					<p class="header-info__text"> <?php the_field('header-baner__text'); ?> </p>
					<a href=" <?php the_field('header-button-link') ?> " class="header-info__button button"> <?php the_field('header-button-text')?> </a>
				</div>
			</div>

			<div class="ba-menu default" id="menu">
				<div class="row  large-uncollapse medium-uncollapse small-collapse">
					<div class=" columns">
						<nav class="top-bar" data-topbar="" role="navigation" data-options="{is_hover: false, mobile_show_parent_link: true}">

							<ul class="title-area">
								<li class="name"></li>
								<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
							</ul><!-- END of .top-bar -->
							<section class="top-bar-section">
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => 'foundation_page_menu', "container" => false, 'walker' => new foundation_navigation() ) ); ?>
							</section><!-- END of .top-bar-section -->
						</nav>
					</div><!-- END of .columns -->


				</div><!-- END of .row -->
			</div>

		</header><!--END of header -->
