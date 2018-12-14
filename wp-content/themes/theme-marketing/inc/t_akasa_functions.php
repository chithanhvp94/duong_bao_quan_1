<?php
function show_pb_builder($data) {
    $builder_data = fw_get_db_settings_option($data);
//    $builder_data = fw_get_db_settings_option('lists-builder');
//    $builder_data = fw_get_db_settings_option('lists-builder');
    $option_type = fw()->backend->option_type('page-builder');
    return str_replace('\\', '\\\\', // WordPress "fixes" the slashes
        $option_type->json_to_shortcodes( $builder_data['json'] )
    );
}
function thanh_get_loop_templates(){
    $templates = array();

    $template_files = array(
        'loop*.php',
        '*/loop*.php',
        'content*.php',
        '*/content*.php',
        'template-parts/*/loop*.php',
        'template-parts/*/content*.php',
    );

    $template_dirs = array( get_template_directory(), get_stylesheet_directory() );
    $template_dirs = array_unique( $template_dirs );
    foreach( $template_dirs  as $dir ){
        foreach( $template_files as $template_file ) {
            foreach( (array) glob($dir.'/'.$template_file) as $file ) {
                if( file_exists( $file ) ) $templates[] = str_replace($dir.'/', '', $file);
            }
        }
    }

    $templates = array_unique( $templates );
    $templates = apply_filters('siteorigin_panels_postloop_templates', $templates);
    sort( $templates );

    return $templates;
}

?>