<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
				<div class="col-md-8 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', 'singlecourses');

							echo "\n\n";
							
							bootstrapBasicPagination();

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
<div class="col-md-4">

	<?php if( get_field('course_number') ): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Course Number</h3>
			</div>
			<div class="panel-body">
				<p><?php the_field('course_number'); ?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if( get_field('course_instructor') ): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Course Instructor</h3>
			</div>
			<div class="panel-body">
				<p><?php the_field('course_instructor'); ?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if( get_field('course_date') ): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Course Date</h3>
			</div>
			<div class="panel-body">
				<p><?php the_field('course_date'); ?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if( get_field('course_location') ): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Course Location</h3>
			</div>
			<div class="panel-body">
				<p><?php the_field('course_location'); ?></p>
			</div>
		</div>
	<?php endif; ?>

	<?php
	$gtcc_register = get_theme_mod( 'registration_textbox', '' );
	if($gtcc_register) { ?>
		<a href="<?php echo $gtcc_register; ?>" class="btn btn-yellow btn-lg btn-block marginbot-15" target="_blank">Register <i class="fa fa-chevron-right"></i></a>
	<?php } else { ?>

	<?php } ?>

</div>
<?php get_footer(); ?>