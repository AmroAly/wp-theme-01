
<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <h1 class="page-header">
            <?php
                if(is_category()) {
                    single_cat_title();
                } else if(is_author()) {
                    the_post();
                    echo 'Archives By Author: ' . get_the_author();
                } else if(is_tag()) {
                    single_tag_title();
                } else if(is_day()) {
                    echo 'Archives by day: ' . get_the_date();    
                } else if(is_month()) {
                    echo 'Archives by month: ' . get_the_date('F Y');
                } else if(is_year()) {
                    echo 'Archives by year: ' . get_the_date('Y');
                } else {
                    echo 'Archives';
                }
            ?>
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