<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
</div><!--.container-fluid-->
</div><!--#main-content.container-fluid.theme-showcase-->
<?php full_below_content_area(); ?>
			
			<footer>
				<div class="footer-section pad-40">
					<div class="container">
						<div id="footer-row" class="row site-footer">
							<?php get_sidebar('footerone'); ?>
							<?php get_sidebar('footertwo'); ?>
							<?php get_sidebar('footerthree'); ?>
							<?php get_sidebar('footerfour'); ?>
						</div>
					</div>
				</div>
			</footer>
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php
				$fms_copyright = get_theme_mod( 'copyright_textbox', '' );
				if($fms_copyright) { ?>
					<small>&copy; <?php echo date('Y'); ?> <?php echo $fms_copyright; ?></small>
				<?php } else { ?>
					<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
				<?php } ?>
			</div>
			<div class="col-md-6">
				<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'items_wrap' => '<ul class="foot-menu">%3$s</ul>')); ?>
			</div>
		</div>
	</div>
</div>

		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>