<tr>
	<td scope="row">
		<strong><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></strong>
	</td>
	<td>
		<?php list_hierarchical_terms(); ?>
	</td>
	<td>
		<?php the_field( 'course_instructor' ); ?>
	</td>
	<td>
		<?php the_field( 'course_number' ); ?>
		<?php
		$gtcc_register = get_theme_mod( 'registration_textbox', '' );
		if($gtcc_register) { ?>
			<p><a href="<?php echo $gtcc_register; ?>" class="btn btn-primary btn-sm btn-bordered margintop-15" target="_blank">Register <i class="fa fa-chevron-right"></i></a></p>
		<?php } else { ?>

		<?php } ?>
	</td>
</tr>