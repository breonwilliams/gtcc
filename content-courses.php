<tr>
	<th scope="row">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</th>
	<td>
		<?php list_hierarchical_terms(); ?>
	</td>
	<td>
		<?php the_field( 'course_instructor' ); ?>
	</td>
	<td>
		<?php the_field( 'course_number' ); ?>
	</td>
</tr>