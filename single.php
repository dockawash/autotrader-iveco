<?php get_header();
$sidebar_position = tfuse_sidebar_position();
tfuse_shortcode_content('top');

$header_title = 'blog le poids lourd';
?>
<div class="header">
    <div class="header_title">
        <h1><?php echo $header_title; ?></h1>
    </div>
</div>

<div <?php tfuse_class('middle'); ?>>
    <div class="container clearfix">
        <?php tfuse_category_ads(); tfuse_hook(); ?>
        <div class="content">
            <?php while ( have_posts() ) :
                the_post();
                get_template_part( 'content', 'single' );
				wp_link_pages();
                if ( tfuse_page_options('enable_comments',tfuse_options('enable_posts_comments',true) ) ) tfuse_comments(); ?>
            <?php endwhile; // end of the loop. ?>
        </div><!--/ content -->

        <?php if ($sidebar_position == 'left' || $sidebar_position == 'right') : ?>
            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div><!--/ .sidebar -->
        <?php endif; ?>

    </div><!--/ .container  -->
</div><!--/ middle -->

<?php tfuse_shortcode_content('bottom1'); ?>
<?php tfuse_header_content('content'); ?>
<?php tfuse_shortcode_content('bottom'); ?>
<?php tfuse_shortcode_content('bottom2'); ?>
<?php get_footer(); ?>