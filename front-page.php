
<?php get_header(); ?>
<div class="container content">
    <div class="showcase">
        <?php if(is_active_sidebar('showcase')): ?>
            <?php dynamic_sidebar('showcase'); ?>
        <?php endif; ?>
    </div>
    <div class="block">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
        <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
        <?php endif; ?>
    </div>
    <?php if(is_active_sidebar('box1')): ?>
        <?php dynamic_sidebar('box1'); ?>
    <?php endif; ?>

    <?php if(is_active_sidebar('box2')): ?>
        <?php dynamic_sidebar('box2'); ?>
    <?php endif; ?>

    <?php if(is_active_sidebar('box3')): ?>
        <?php dynamic_sidebar('box3'); ?>
    <?php endif; ?>
</div>
<div class="clr"></div>

<?php get_footer(); ?>