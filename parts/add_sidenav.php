<?php if (!is_front_page() && is_page()) {
		if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary_navigation' ) ) { ?>
            <div class="side-nav-wrap clearfix hidden-xs">
                <nav class="side-nav">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'primary_navigation',
                        'menu_class'      => 'list-group has-side-nav',
                        'depth'           => 2,
                        'sub_menu'		  => true,
                        'walker'          => new clean_walker()
                    ));?>
                </nav>
            </div>            
		<?php } ?>
        <!-- add a left sidebar/widget area --> 
		<?php if ( is_active_sidebar( 'left-sidebar' )) : ?>
            <div class="clearfix hidden-xs">
                <aside class="sidebar left-widgets">
                    <?php dynamic_sidebar('left-sidebar'); ?>
                </aside>
            </div> 
         <?php endif; ?>
<?php } ?>