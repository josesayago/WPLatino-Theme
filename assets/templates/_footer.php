	<div class="clearfix">&nbsp;</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 col-left">
					<nav class="navbar navbar-bottom">
						<?php 
							if( has_nav_menu( 'footer-menu-1' ) )
								wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'container_class' => 'footer-menu' ) ); 
						?>
					</nav>
				</div>
				<div class="col-md-4 col-xs-12 col-center">
					<nav class="navbar navbar-bottom">
						<?php 
							if( has_nav_menu( 'footer-menu-2' ) )
								wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'container_class' => 'footer-menu' ) ); 
						?>
					</nav>
				</div>
				<div class="col-md-4 col-xs-12 col-right">
					<p class="copyright">
						<?php bloginfo('name'); ?>
						<br />
						Copyright &copy; <?php echo date('Y'); ?>
						<br />
						<?php if( !empty( get_theme_mod('wplatino_tel') ) ) { ?>
						Call Us <a href="tel:<?php echo get_theme_mod('wplatino_tel'); ?>" class="telf"><?php echo get_theme_mod('wplatino_tel_format'); ?></a>
						<?php } ?>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>