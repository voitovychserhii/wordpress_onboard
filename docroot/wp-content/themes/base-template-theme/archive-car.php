<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Base_Template_Theme
 */

get_header();
?>

<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
                <h1 class="car-header"><?php the_title(); ?></h1>
                <div>
                    <?php
                        the_shortlink();
                    ?>
                </div>
                <div>
                    <?php
                        the_taxonomies();
                    ?>
                </div>
            <?php

            the_author_posts_link();
            the_category();
        endwhile;
    endif;
?>
<?php
    get_attachment_template();
?>


<?php
get_sidebar();
get_footer();