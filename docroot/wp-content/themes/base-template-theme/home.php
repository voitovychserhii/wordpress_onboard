<?php
get_header();
?>

<h1>Starting the home.php</h1>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

?>

<h1>The end of home.php</h1>

<?php

get_sidebar();
get_footer();
?>