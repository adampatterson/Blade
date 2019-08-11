<?php
if (has_post_thumbnail()) {
    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured');
}
?>

    <div class="container m-bottom-30 m-top-30 content-header text-center">
        <h2 class="text-uppercase jumbo">
            <?php the_title(); ?>
        </h2>
        <div class="content-terms">
            <strong>Director: </strong><?php
            $director = get_the_terms(get_the_ID(), 'director');
            if (is_array($director)) {
                the_terms(get_the_ID(), 'director', ' ', ', ');
            }
            ?>
        </div>
        <div class="content-terms">
            <strong>Genre: </strong><?php
            $genre = get_the_terms(get_the_ID(), 'genre');
            if (is_array($genre)) {
                the_terms(get_the_ID(), 'genre', ' ', ', ');
            }
            ?>
        </div>
    </div>

<?php
var_dump(the_content());
var_dump(the_title());

var_dump($data['movie']['date_published']);
var_dump($data['movie']['run_time']);
var_dump($data['movie']['awards']);
var_dump($data['movie']['featured_song']);
var_dump($data['movie']['screen_play']);
var_dump($data['movie']['movie_trailer']);
var_dump($data['movie']['movie_poster']);
?>