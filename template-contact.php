<?php
/**
 * Template name: Contact page
 */

get_header();
?>

	<div id="blue">
		<div class="container">
			<div class="row">
				<?php the_title('<h3>', '</h3>'); ?>
			</div>
		</div>
	</div>

	<div class="container mtb">
		<div class="row">
			<div class="col-lg-8">
				<?php if ( function_exists('acf_add_local_field_group') ): ?>
					<h4><?php the_field('field_main_title'); ?></h4>
					<div class="hline"></div>
					<?php the_field('field_main_text'); ?>
				<?php endif; ?>

				<div class="contact-form">
					<?php
						while ( have_posts() ) : the_post();

							the_content();

						endwhile; // End of the loop.
					?>
				</div>
			</div>

			<div class="col-lg-4">
				<?php if ( function_exists('acf_add_local_field_group') ): ?>
					<h4><?php the_field('field_address_title'); ?></h4>
					<div class="hline"></div>
					<?php the_field('field_address_text'); ?>
				<?php endif; ?>
			</div>
		</div>

<?php get_footer(); ?>