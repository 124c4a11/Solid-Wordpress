<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solid
 */

?>


	</div><!-- #content -->
	<div id="footerwrap">
		<div class="container">
			<?php if ( is_active_sidebar('sidebar-footer') ): ?>
				<div class="row">
					<?php dynamic_sidebar('sidebar-footer'); ?>
				</div><! --/row -->
			<?php endif; ?>
		</div><! --/container -->
	</div><! --/footerwrap -->

<?php wp_footer(); ?>

</body>
</html>
