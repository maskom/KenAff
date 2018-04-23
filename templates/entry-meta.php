<div class="entry-meta">
    <time class="updated entry-meta__lists " datetime="<?= get_post_time('c', true); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?= get_the_date(); ?></time>
    <p class="byline author vcard entry-meta__lists"><?= __('<i class="fa fa-user-o  " aria-hidden="true"></i>', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
    <div class="category-meta entry-meta__lists">
        <i class="fa fa-folder-o" aria-hidden="true"></i>
        <?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
        }
        ?>
    </div>
    <div class="comments-meta entry-meta__lists">
        <i class="fa fa-comments-o" aria-hidden="true"></i>
        <?php echo get_comments_number(). ' Comments';?>
    </div>
    <div class="view-meta entry-meta__lists">
        <i class="fa fa-eye" aria-hidden="true"></i>
        <?php  echo getPostViews(get_the_ID());?>
    </div>
</div>
