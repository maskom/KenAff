<?php
/**
 * Created by PhpStorm.
 * User: komar
 * Date: 10/8/2017
 * Time: 3:22 PM
 */
?>

<?php
$tags = get_the_tags();
$tag_html = '';
if ($tags) {
    foreach ( $tags as $tag ) {
        $tag_link = get_tag_link( $tag->term_id );

        $tag_html .= "<span class='badge badge-pill badge-default badget-custom'><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $tag_html .= "{$tag->name}</a></span>";
    }
}

?>
<div class="post_tags"><?php echo $tag_html;?></div>
