
<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <h1 class="page-header">
            Search results
        </h1>
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
        <?php endif; ?>
    </div>

    <div class="sidebar">
        <div class="block">
            <h3>Sidebar Head</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quod veritatis perspiciatis.</p>
            <a href="#" class="button">More</a>
        </div>
    </div>
</div>
<div class="clr"></div>

<?php get_footer(); ?>