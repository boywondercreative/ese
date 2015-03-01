<?php if (!is_front_page() && is_page() && function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary_navigation' )) {?>
    <div class="toggle-nav clearfix visible-xs">
        <nav id="menu">
            <?php wp_nav_menu( array(
                'theme_location'  => 'primary_navigation',
                'menu_class'      => 'nav navmenu-nav',
                'sub_menu'		  => true,
                'walker'          => new clean_walker()
            ));?>
        </nav>
    </div>    
<?php } ?>