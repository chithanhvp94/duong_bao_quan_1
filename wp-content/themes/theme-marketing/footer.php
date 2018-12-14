<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

<?php
if(show_pb_builder('lists-builder-footer') != ''){
    echo do_shortcode(show_pb_builder('lists-builder-footer'));
}
?>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [
                'Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',
                'Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic',
                'Niramit:300,300i,400,400i,500,500i,600,600i,700,700i',
                'Roboto:300,400,400i,500,500i,700,700i,900,900i',
                'Montserrat:300,400,500,600,700',
                'Source+Sans+Pro:300,400,600,700',
                'Lora:400,400i,700,700i&amp;subset=vietnamese',
                'Poppins:100,200,300,400,500,600,700'
            ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); </script>


</body>
</html>
