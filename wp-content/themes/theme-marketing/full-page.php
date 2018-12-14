<?php
/*Template Name: Full page*/
?>
<?php
get_header();
echo '<div class="wizFullpage">';
while ( have_posts() ) :
    the_post();
    the_content();
endwhile; // End of the loop.
echo '</div>';
get_footer();

?>
