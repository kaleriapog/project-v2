<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project
 */


$button_footer = get_field('link_footer', 'options');
$button_color_footer = get_field('color_button_footer', 'options');

?>

	<footer id="colophon" class="site-footer footer">
		<div class="site-info">
			<div class="main-size">
                <div class="footer__inner">
                    <div class="footer__left">
                        <div class="logo">

                            <?php
                            the_custom_logo();
                            ?>

                        </div>
                    </div>
                    <div class="footer__right">

                        <?php dynamic_sidebar(); ?>

                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
