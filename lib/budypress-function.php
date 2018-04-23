<?php
/**
 * Created by PhpStorm.
 * User: komar
 * Date: 10/26/2017
 * Time: 11:27 PM
 */

/**
 * disable cover image
 * https://buddydev.com/buddypress/disable-cover-images-for-buddypress-2-4/
 */
add_filter( 'bp_is_profile_cover_image_active', '__return_false' );

function bpfr_get_post_on_profile() {

    $myposts = get_posts(  array(
        'posts_per_page' => -1,
        'author'         => bp_displayed_user_id(),
        'post_type'      => 'post'
    ));

    if( ! empty($myposts) ) {

        echo '<h5>My awesome posts:</h5>';

        echo '<ul>';

        foreach($myposts as $post) {
            setup_postdata( $post );
            echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></i>';
        }

        echo '</ul>';

        wp_reset_postdata();

    } else {

        echo '<div class="info" id="message"><p><strong>'. bp_displayed_user_fullname() .'</strong> has No posts.</p></div>';
    }
}
//add_action ( 'bp_after_member_header', 'bpfr_get_post_on_profile' );