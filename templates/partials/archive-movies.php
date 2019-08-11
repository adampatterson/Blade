<div class="content-wrapper pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <?php
                $page = get_page_by_path('/movies');
                ?>
                <h1 class="text-uppercase jumbo pb-3"><?= $page->post_title ?></h1>
                <?php if ( ! is_paged()): ?>
                    <?= wpautop($page->post_content) ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row m-top-60">

            <div class="col-md-9">
                <section id="movies" class="row">
                    <?php get_template_part('templates/loop', 'movies'); ?>
                </section>

                <div class="row">
                    <div class="col-md-12">
                        <?php get_template_part('templates/partials/pagination') ?>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <h3>Categories</h3>
                <ul class="categories list-unstyled">
                    <?php
                    if (is_tax('genre')):
                        ?>
                        <li><a href="/movies">View All</a></li>
                    <?php endif; ?>
                    <?php
                    wp_list_categories([
                        'title_li'   => '', // Disables title
                        'orderby'    => 'slug',
                        'taxonomy'   => 'genre',
                        'hide_empty' => 1
                    ]);
                    ?>
                </ul>
            </div>

        </div>

    </div>
</div>
