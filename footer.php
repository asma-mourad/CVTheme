<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CVTheme
 */

?>

	</div><!-- #content -->

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <a href="<?php echo get_theme_mod('facebook-link', cvtheme_get_customiser_default( 'facebook-link')) ?>"><i class="fa fa-facebook-official w3-hover-opacity" ></i></a>
  <a href="<?php echo get_theme_mod('instagram-link', cvtheme_get_customiser_default( 'instagram-link')) ?>"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="<?php echo get_theme_mod('snapchat-link', cvtheme_get_customiser_default( 'snapchat-link')) ?>"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
  <a href="<?php echo get_theme_mod('pinterest-link', cvtheme_get_customiser_default( 'pinterest-link')) ?>"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
  <a href="<?php echo get_theme_mod('twitter-link', cvtheme_get_customiser_default( 'twitter-link')) ?>"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="<?php echo get_theme_mod('linkedin-link', cvtheme_get_customiser_default( 'linkedin-link' )) ?>"><i class="fa fa-linkedin w3-hover-opacity"></i></a>

  <p>Special Thanks to <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
