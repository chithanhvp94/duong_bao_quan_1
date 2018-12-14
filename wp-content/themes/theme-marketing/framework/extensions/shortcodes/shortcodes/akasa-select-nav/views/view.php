<?php if ( ! defined( 'FW' ) ) {

	die( 'Forbidden' );

}



/**

 * @var array $atts

 */

?>

<?php

if(!empty($atts['options_class'])){

    echo '<div class="'.$atts['options_class'].'">';

}

if(!empty($atts['title'])){

    echo '<div class="title_menu">'.$atts['title'].'</div>';

}

wp_nav_menu( array(

   'theme_location'  => $atts['menu'],

    // 'menu'            => $atts['menu'],

    'container'       => 'div',

//    'container_class' => "menu-container",

    'container_id'    => '',

    'menu_class'      => $atts['menu_class'],

    'menu_id'         => $atts['menu_id'],

    'echo'            => true,

    'fallback_cb'     => 'wp_page_menu',

    'before'          => '',

    'after'           => '',

    'link_before'     => '',

    'link_after'      => '',

    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',

    'depth'           => 0,

    'walker'          => '',

) );

if(!empty($atts['options_class'])){

    echo '</div>';

}

if($atts['show_mobile']){?>

    <div class="col-12 menu-mobile">

        <div class="menu-mobile-logo">

        </div>

        <nav id="menu">

            <?php

            wp_nav_menu( array(

//                'theme_location'  => $atts['menu'],

                'menu'            => $atts['menu'],

                'container'       => 'div',

                'container_class' => "menu-{menu-slug}-container",

                'container_id'    => '',

                'menu_class'      => 'menu',

                'menu_id'         => 'desktop-menu',

                'echo'            => true,

                'fallback_cb'     => 'wp_page_menu',

                'before'          => '',

                'after'           => '',

                'link_before'     => '',

                'link_after'      => '',

                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',

                'depth'           => 0,

                'walker'          => '',

            ) );

            ?>

        </nav>

        <div class="header">

            <a href="#menu"><span></span></a>

        </div>

    </div>

<?php }

?>



