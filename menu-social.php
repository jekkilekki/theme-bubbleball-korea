<?php

/* 
 * @link: http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
 */
if ( has_nav_menu( 'social' ) ) {
    wp_nav_menu(
            array(
                'theme_location'    => 'social',
                'container'         => 'div',
                'container_id'      => 'menu-social',
                'container_class'   => 'social-icons',
                'menu_id'           => 'menu-social-items',
                'menu_class'        => 'menu-items',
                'depth'             => 1,
                'link_before'       => '<span class="screen-reader-text">',
                'link_after'        => '</span>',
                'fallback_cb'       => ''
            )
    );
} 
