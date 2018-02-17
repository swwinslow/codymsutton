<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

	</div><!-- #content -->
</div><!-- #page -->
<?php do_action('generate_before_footer'); ?>
<div <?php generate_footer_class(); ?>>
	<p class="personal-footer">&copy; 2018 Cody Sutton. All rights reserved. | Website by Kristen Weber</p>
</div><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>