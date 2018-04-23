<div class="user-inline">
    <?php
    $member_id = get_the_author_meta('ID');

    ?>
    <div class="user-inline__inner media">
        <div class="user-inline__photo d-flex mr-2">
            <?php echo bp_core_fetch_avatar ( array( 'item_id' => $member_id, 'type' => 'thumb' ) ) ?>
        </div>
        <div class="user-inline__text media-body">
            <div class="byline author vcard mt-1 "><?php echo bp_core_get_userlink( $member_id ); ?></div>
            <div class="d-inline"><time class="updated entry-meta__lists " datetime="<?= get_post_time('c', true); ?>"><i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php the_permalink() ?>"><?= get_the_date(); ?></a></time></div>
        </div>
    </div>

</div>