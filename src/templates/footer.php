<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wv
 */

?>


	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-footer__copyright">
      &copy; <?php echo date("Y"); ?> Wilderness Voices
    </div>
	</footer>


<?php wp_footer(); ?>

<?php get_template_part( 'partials/analytics' ); ?>

</body>
</html>
