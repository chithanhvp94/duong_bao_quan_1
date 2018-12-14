<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('Cấu hình google form', 'Google form', 'administrator', 'asio_google_form', 'my_cool_plugin_settings_page' , 'dashicons-calendar-alt' );

	//call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}

function register_my_cool_plugin_settings() {
	//register our settings
	register_setting( 'aka-setting-field-form-google', 'new_option_name' );
	register_setting( 'aka-setting-field-form-google', 'some_other_option' );
}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Cấu hình google form</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'aka-setting-field-form-google' ); ?>
    <?php do_settings_sections( 'aka-setting-field-form-google' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th width="20%" scope="row">Đường dẫn google form</th>
        <td width="50%"><input type="text" name="new_option_name" id="new_option_name" value="<?php echo esc_attr( get_option('new_option_name') ); ?>" style="width:100%; display:block" /></td>
            <td><input type="button" id="get_data" value="Lấy dữ liệu form"></td>
        </tr>
        <tr valign="top">
            <td colspan="2">
                <div class="data_result_hidden" style="display:none;">
                    
                </div>
                <div class="data_result_google">
                    
                </div>
            </td>
        </tr>
        <tr valign="top">
        <th scope="row">Code</th>
        <td>
           <textarea name="some_other_option" id="some_other_option" style="width:100%; display:block" rows="10"><?php echo esc_attr( get_option('some_other_option') ); ?></textarea>
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Shortcode</th>
        <td><input type="text" name="" value="[asio-form-submit]" /></td>
        </tr>
        <tr valign="top">
            <td colspan="3"><iframe style="width: 100%; min-height: 500px; display: block" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-UMridOkvOHab-tgbH9CzwLNMjJagXtj8A0obU1-TWlmOuLLV3GHgjUccHFjzHG9P6XnFjUZtPJ3-/pubhtml?widget=true&amp;headers=false"></iframe></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
<?php 

add_action( 'wp_ajax_aka_action', 'aka_action' );
add_action( 'wp_ajax_nopriv_aka_action', 'aka_action' );

function aka_action() {
	global $wpdb; // this is how you get access to the database

	$aka_link_google = $_POST['link_google'];
    
    $aka_content_google = file_get_contents($aka_link_google);
    
    $pattern_formAction = '/(<form action=\")(.+)(formResponse\")/';
    
    $pattern_input = '/(entry.)(.[0-9]+)(\")/';
    $pattern_link_css = '/(http)(.+)(uploads\/siteorigin-widgets)(.+)(\.css)/';
    $pattern_result = '/(\<div)(.+)(\<\/div\>)/';
    
    $page_listInput = '';
    if(preg_match_all($pattern_formAction, $aka_content_google, $matches)){
        $page_formAction = $matches[2][0]. 'formResponse';
    }
    if(preg_match_all($pattern_input, $aka_content_google, $matches)){
        $page_listInputs = $matches[2];
        foreach ($page_listInputs as $value) {
            $page_listInput .= 'entry.' . $value. ' ';
        }
    }
    if(preg_match_all($pattern_result, $aka_content_google, $matches)){
        $aka_content_google = $matches[0][0];
    }
    echo '<div class="asio_result_list">' . $page_listInput . '</div><div class="asio_result_link">' . $page_formAction . '</div><div class="asio_result">' . $aka_content_google . '</div>';

	wp_die(); // this is required to terminate immediately and return a proper response
}
add_action( 'admin_footer', 'aka_action_javascript' ); // Write our JS below here

function aka_action_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {
        var aka_dataResult = '';
        var aka_id_fromwebsite = '';
        var aka_style_fromwebsite = '';
        var aka_class_fromwebsite = '';
        
        jQuery("#get_data").click(function(){
            var data_form = jQuery("#new_option_name").val();
            var data = {
                'action': 'aka_action',
                'link_google': data_form
            };
            // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            jQuery.post(ajaxurl, data, function(response) {
                var list_nameInput;
                jQuery(".data_result_hidden").append(response);
                jQuery(".data_result_hidden").each(function(){
                    var array_listData = jQuery(this).children('.asio_result_list').text().split(" ");
                    var aka_linkData = jQuery(this).children('.asio_result_link').text();
                    
                    // aka_dataResult += '<form action="'+aka_linkData+'" method="POST" id="t_ss-form" class="form_lienhe" target="hidden_iframe">';
                    aka_dataResult += '<form action="'+aka_linkData+'" method="POST" id="t_ss-form" class="form_lienhe">';
                    for(var i = 0; i < array_listData.length; i++){
                        if(array_listData[i] != ''){
                            if(i == 0){
                                aka_id_fromwebsite = array_listData[i];
                                aka_class_fromwebsite = 'hidden';
                                aka_style_fromwebsite = ' style="display:none"';
                            }else{
                                aka_class_fromwebsite = '';
                                aka_style_fromwebsite = '';
                            }
                            jQuery(this).each(function(){
                                var result_placeholder = jQuery("[name='"+array_listData[i]+"']").attr("aria-label");
//                                jQuery("[name='"+array_listData[i]+"']").attr("placeholder", result_placeholder).clone();
                                jQuery(".data_result_google").append(jQuery("[name='"+array_listData[i]+"']").attr("placeholder", result_placeholder));
                                
                                aka_dataResult +='<div class="wrap_input '+aka_class_fromwebsite+'"'+aka_style_fromwebsite+'>'+jQuery("[name='"+array_listData[i]+"']")[0].outerHTML+'<span class="error"></span></div>';
//                                aka_dataResult +='<div class="wrap_input">aaa</div>';
                            });
                        }
                    }
                    aka_dataResult += '<div class="wrap_input submit_form"><input type="submit" name="submit" value="REGISTER NOW" id="ss-submit" class="aka-button aka-button-action "></div>';
                    aka_dataResult += '</form>';
                    // aka_dataResult += '<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){};"></iframe>';
                    // aka_dataResult += '<script>';
                    // aka_dataResult += 'jQuery(window).ready(function($){';
                    // aka_dataResult += 'var domain_f = window.location.href;';
                    // aka_dataResult += 'jQuery("[name=\''+aka_id_fromwebsite+'\']").attr(\'value\',domain_f);';
                    // aka_dataResult += 'jQuery("form#t_ss-form").submit(function() {';
                    // aka_dataResult += 'alert("Cảm ơn bạn đã liên hệ. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất." );';
                    // aka_dataResult += 'location.reload();';
                    // aka_dataResult += '});';
                    // aka_dataResult += '});';
                    // aka_dataResult += '<\/script>';
                });
                jQuery("#some_other_option").val(aka_dataResult);
                
            });
        });
		
	});
	</script>
	<?php
}

// [bartag foo="foo-value"]
function aka_form_submit( $atts ) {
//    do_settings_sections( 'aka-setting-field-form-google' );
//    settings_fields( 'aka-setting-field-form-google' );
    $result = get_option('some_other_option');
    
    return $result;
}
add_shortcode( 'asio-form-submit', 'aka_form_submit' );