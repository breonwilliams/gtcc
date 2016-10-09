<?php /* Template Name: Page Courses */  ?>
<?php
/**
 * Template for displaying pages
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
					<main id="main" class="site-main padtop-40" role="main">
						<div class="table-responsive">
							<table class="table table-1 table-striped">
								<thead>
								<tr>
									<th>Course Name</th>
									<th>Course Category</th>
									<th>Instructor</th>
									<th>Course Number</th>
								</tr>
								</thead>
								<tbody>
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'paged' => $paged,
								'posts_per_page' => -1,
								'post_type' => 'courses',
								'orderby'=>'title',
								'order'=>'ASC'
							);
							query_posts($args);
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								$do_not_duplicate[] = $post->ID; //This is the magic line
								if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>



								<?php get_template_part('content', 'courses'); ?>

							<?php endwhile; ?>

								</tbody>
							</table>
						</div>

						<?php endif; ?>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 