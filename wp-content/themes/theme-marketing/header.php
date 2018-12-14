<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php

        //load header, footer, default
        $cssFile = array(
            get_stylesheet_directory().'/load-layouts/css/default.css',
            get_stylesheet_directory().'/load-layouts/css/header.css',
            get_stylesheet_directory().'/load-layouts/css/footer.css',
        );
        if(is_home() || is_front_page()){
            array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/index.css' );
        }else if(is_single()){
            array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/single.css' );
        }else if(is_page()){
            if(is_page('how-to-host-airbnb-booking-asio')){
                array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/register_form.css' );
            }else if(is_page('kinh-nghiem-lam-host-airbnb-luxstay-asio')){
                array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/register_form.css' );
                array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/form_vietnam.css' );
            }else if(is_page('work-with-us')){
                array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/work_with_us.css' );
            }else{
                array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/page.css' );
            }


        }else if(is_archive()){
            array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/archie.css' );
        }else if(is_search()){
            array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/search.css' );
        }else if(is_404()){
            array_push($cssFile, get_stylesheet_directory().'/load-layouts/css/404.css' );
        }

        $buffer = '';
        foreach($cssFile as $item){
            $buffer .= file_get_contents($item);
        }
        $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
        $buffer = str_replace(': ', ':', $buffer);
        $buffer = str_replace('@charset "UTF-8";', '', $buffer);
        $buffer = str_replace('image_local_site', get_stylesheet_directory_uri().'/images', $buffer);
        $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

        if($buffer != ''){
	        echo('<style>');
	        echo($buffer);
	        echo('</style>');
        }
//    echo('<style>');
//    get_template_part( 'load-layouts/css' );
//    echo('</style>');
    ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-site">


<?php

if(show_pb_builder('header-builder') != ''){
    echo do_shortcode(show_pb_builder('header-builder'));
}
?>


	<div id="content" class="site-content">
