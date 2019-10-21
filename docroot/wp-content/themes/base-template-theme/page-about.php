<?php
get_header();
?>

<h1> This is about page </h1>
<?php
    echo wp_get_theme()->get_page_templates()[0];
?>



<?php
get_sidebar();
get_footer();
?>
