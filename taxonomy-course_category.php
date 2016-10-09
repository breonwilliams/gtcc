<?php 
/**
 * Displaying archive page (category, tag, archives post, author's post)
 * 
 * @package bootstrap-basic
 */

get_header(); 

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?>

							<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>
						<div class="table-responsive">
							<table class="table table-1 table-striped">
								<thead>
								<tr>
									<th>Course Name</th>
									<th>Course Category</th>
									<th>Course Instructor</th>
									<th>Course Number</th>
								</tr>
								</thead>
								<tbody>
							<?php
							/* Start the Loop */
							while (have_posts()) {
								the_post();

								/* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
								get_template_part('content', 'courses');
							} //endwhile;
							?>
							<div class="cleared"></div>

						<?php } else { ?>

							<?php get_template_part('no-results', 'archive'); ?>

						<?php } //endif; ?>
								</tbody>
							</table>
						</div>
						<?php bootstrapBasicPagination(); ?>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 