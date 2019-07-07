<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Lab Grim</title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<section class="top-bar">

				<div class="container">
					<div class="row">
						<div id="space-in-mobile">
							<a href="javascript:void(0);" class="icon">
				    			<i class="fa fa-bars"></i>
				  			</a>
						</div>
						<!-- DESKTOP MENU -->
						<section id="my-nav-logo" class="nav-logo col-md-2 col-12 text-center">
							<?php 
								if ( the_title( '', '', false ) != 'Olá, mundo!' ):
									the_title( '<h1 class="nav-logo-title">', '</h1>' );
								else:
									get_template_part( 'template-parts/logo' );
								endif;
							?>
						</section>
						<nav id="my-pags-bar" class="pags-bar col-md-8 col-12 text-right">
							<?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>		
						</nav>
						<nav id="my-social-media-icons" class="social-media-icons col-2 text-center">
							<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
						</nav>
						<!-- END DESKTOP MENU -->
					</div>
				</div>
				
				<!-- MOBILE MENU -->
				<section class="mobile-menu">
					<div class="rect"></div>
					<nav id="my-pags-bar-mobile" class="pags-bar-mobile">
						<?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
						<nav id="my-social-media-icons-mobile" class="social-media-icons-mobile">
							<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
						</nav>
					</nav>
				</section>
				<!-- END MOBILE MENU -->

			</section>
		</header> <!-- end header -->