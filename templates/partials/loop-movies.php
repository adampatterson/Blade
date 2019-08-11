<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('pb-5 movie col-md-4 m-bottom-60'); ?> itemscope="" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
        <?php if (has_post_thumbnail()) { ?>
            <div class="post-image pb-3">
                <a href="<?php the_permalink(); ?>" title="Read Full Post">
                    <?php the_post_thumbnail('post_movies', array(
                        'class' => "img-fluid",
                    )); ?>
                </a>
            </div>
        <?php } ?>

        <div class="content" itemprop="text">
            <h4><a href="<?php the_permalink(); ?>" title="Read Full Post"><?php the_title(); ?></a></h4>
        </div>
    </article>
<?php endwhile; ?>
