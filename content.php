
<?php if(is_archive() || is_search()): ?>
    <article class="post">
        <div class="archive-post">
            <h4>
                <a href="<?php echo post_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <p>Posted on <?php the_time('F j, Y g:i:a') ?> by <?php the_author(); ?></p>
        </div>
    </article>
<?php else: ?>

<article class="post">
    <h2><?php the_title(); ?></h2>
    <p class="meta">Posted on <?php the_time('F j, Y g:i:a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | 
    Posted In 
    <?php 
    $categories = get_the_category();  
    $separator = ", ";
    $output = '';

    if($categories) {
        foreach($categories as $category) {
            $output .= '<a href="'. get_category_link($category->term_id) .'">' . $category->cat_name . '</a>' . $separator;
        }
    }

    echo trim($output, $separator);
    ?></p>

    <?php if(has_post_thumbnail()): ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>

        <?php if(is_single()): ?>
            <p><?php the_content(); ?></p>
        <?php else: ?>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="button">Read more</a>
        <?php endif; ?>
</article>

<?php endif; ?>