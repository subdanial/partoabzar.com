	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
	<nav class="site-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
	</nav>
	<?php endif; ?>