<?php
	global $wp_query, $is_tf_blog_page;
	get_header();
	if ($is_tf_blog_page) die();
	$sidebar_position = tfuse_sidebar_position();
	tfuse_shortcode_content('top');

	// DOC KAWASH
	// Si "hide_title" et content vide on affiche pas le content
	// if (tfuse_page_options('page_title')!='hide_title' || !empty(get_the_content($wp_query->query_vars['page_id'])!=null) :
	$mycont = get_page($wp_query->query_vars['page_id']);
	$mycont = $mycont->post_content;
	// echo $mycont;
	if (empty($mycont)==0) :
?>

<div <?php tfuse_class('middle'); ?>>
	<div class="container clearfix">
		<?php tfuse_category_ads(); tfuse_hook(); ?>
		<div class="content">
			<div class="entry">
				<?php tfuse_custom_title($wp_query->query_vars['page_id']); ?>

				<?php while ( have_posts() ) {
					the_post();
					the_content();
				} ?>
			</div><!--/ .entry -->

			<?php if ( tfuse_page_options('enable_comments') ) tfuse_comments(); ?>
		</div><!--/ content -->

		<?php if ($sidebar_position == 'left' || $sidebar_position == 'right') : ?>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div><!--/ .sidebar -->
		<?php endif; ?>

	</div><!--/ .container -->
</div><!--/ #middle -->

<?php
	// DOC KAWASH
	endif;
?>

<?php tfuse_shortcode_content('bottom1'); ?>
<?php tfuse_header_content('content'); ?>
<?php tfuse_shortcode_content('bottom'); ?>
<?php tfuse_shortcode_content('bottom2'); ?>
<?php get_footer(); ?>

