<?php
/*
    Template Name: Company Layout
*/

?>

<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <article class="page">
                <h2><?php the_title(); ?></h2>
                <p class="phone">Call Us 010 973 686 44</p>
                <?php the_content(); ?>
            </article>
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