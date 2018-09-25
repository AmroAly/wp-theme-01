
<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <article class="page">
            <?php  if(page_is_parent()): ?>
            <nav class="nav sub-nav">
            <ul>
                <span class="parent-link">
                    <a href="<?php get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a>
                </span>
                <?php 
                $args = [
                    'child_of' => get_top_parent(),
                    'title_li' => ''
                ];
                wp_list_pages($args); 
                ?>
            </ul>
            </nav>
            <?php endif; ?>
                <h2><?php the_title(); ?></h2>
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