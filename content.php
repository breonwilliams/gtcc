<article id="post-<?php the_ID(); ?>" <?php post_class('post type-post has-post-thumbnail  entry'); ?>>
	<header class="entry-header">
		<p class="entry-meta">
			<time class="entry-time"><?php the_time('l F jS, Y'); ?></time>
		</p>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<div class="post-left"><a class="post-author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?><span class="name"><?php the_author(); ?></span></a><a class="post-comments-link" href="<?php comments_link(); ?>"><span class="count"><?php comments_number('0', '1', '%'); ?></span> <?php printf( _nx( 'Comment', 'Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a>

		</div><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'article_thumbnail', array( 'class' => 'alignright post-image entry-image rounded' ) ); } ?></a>

		<?php the_excerpt(); ?>

		<p class="more-and-sharing pull-left"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read Full Article</a></p>

	</div>
	<footer class="entry-footer"></footer>
</article>