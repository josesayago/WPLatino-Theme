<?php
/**
 * Home
 *
 * @author Jose SAYAGO
 * @update 2015-05-06
 */
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 home-calltoaction">
				<h1>Call to Action</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 home-highlights">
				Stuff
			</div>
			<div class="col-md-4 home-articles">
				<?php 
					if( function_exists( 'single_latest_posts' ) ) {
						$params = array(
							'title_only' 		=> 'false',
							'auto_excerpt'		=> 'true',
							'number_posts'		=> 4,
							'paginate'			=> 'true',
							'paginate_client'	=> 'true',
							'posts_per_page'	=> 1,
							'instance'			=> 'home-articles',
							'wrapper_list_css'	=> '',
						);
						single_latest_posts( $params );
					}
				?>
			</div>
		</div>
	</div>
</section>