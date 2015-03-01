<header class="banner custom-header" role="banner">
	<div class="navbar-header">
        <div class="sm-offset">
            <div class="logo">
                <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img alt="ses" src="<?php echo get_stylesheet_directory_uri()?>/i/logo.png" id="site-logo">
                </a>
            </div>
        </div>
        <div class="lg-offset hidden-xs">        
            <div class="tagline">
                <div class="tagline-txt"><?php if (is_front_page()) echo bloginfo( 'description' ); ?></div>
            </div>
            <div class="nav-holder">
                <div class="front-bump-shadow"></div>
                <nav class="nav-main custom-nav" role="navigation">
					<?php if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu( array( 
                        'theme_location' => 'primary_navigation', 
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new dropdown_on_hover_Nav_Walker() 
                        ));
                    endif; ?>
                </nav>
                <div class="clearfix"></div>
            </div>
		</div> 
    </div>
</header>