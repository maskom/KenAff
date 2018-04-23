<?php
/**
 * meta box
 */

add_action( 'add_meta_boxes', 'metabox_aff' );
function metabox_aff() {
    add_meta_box(
        'aff_detail_box',
        'Affiliate Details',
        'aff_detail_box',
        'post',
        'normal',
        'high'
    );
}

function aff_detail_box() {
    global $post;
    $values = get_post_custom( $post->ID );
    $product_name = isset( $values['product_name'] ) ? esc_attr( $values['product_name'][0] ) : '';
    $product_image = isset( $values['product_image'] ) ? esc_attr( $values['product_image'][0] ) : '';
    $product_url_aff = isset( $values['product_url_aff'] ) ? esc_attr( $values['product_url_aff'][0] ) : '';
    $product_price = isset( $values['product_price'] ) ? esc_attr( $values['product_price'][0] ) : '';
    $product_discount = isset( $values['product_discount'] ) ? esc_attr( $values['product_discount'][0] ) : '';
    $product_af_discount = isset( $values['product_af_discount'] ) ? esc_attr( $values['product_af_discount'][0] ) : '';
    $product_pc_discount = isset( $values['product_pc_discount'] ) ? esc_attr( $values['product_pc_discount'][0] ) : '';

    
    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' )
    ?>

    <div class="wrap-field">
        <strong><label for="product_name">Product Name</label></strong>
        <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $product_name; ?>" />
    </div>
    <div class="wrap-field">
        <strong><label for="product_image">Product Image</label></strong>
        <input type="text" name="product_image" id="product_image" value="<?php echo $product_image; ?>" />
    </div>
    <div class="wrap-field">
        <strong><label for="product_url_aff">Product Url Affiliate</label></strong>
        <input type="text" name="product_url_aff" id="product_url_aff" value="<?php echo $product_url_aff; ?>" />
    </div>
    <div class="wrap-field">
        <strong><label for="product_price">Product Price</label></strong>
        <input type="text" name="product_price" id="product_price" value="<?php echo $product_price; ?>" />
    </div>
    <div class="wrap-field">
        <strong><label for="product_discount">Product Discount</label></strong>
        <input type="text" name="product_discount" id="product_discount" value="<?php echo $product_discount; ?>" />
    </div>
    <div class="wrap-field">
        <strong><label for="product_af_discount">Product After Discount</label></strong>
        <input type="text" name="product_af_discount" id="product_af_discount" value="<?php echo $product_af_discount; ?>" />
    </div>
    <div class="wrap-field">
        <strong><label for="product_pc_discount">Product Percent Discount</label></strong>
        <input type="text" name="product_pc_discount" id="product_pc_discount" value="<?php echo $product_pc_discount; ?>" />
    </div>

    <style>
        .wrap-field {
            margin-bottom: 5px;
        }
        .wrap-field label {
            padding: 5px 0px;
            width: 100%;
            display: block;
        }
        .wrap-field input{
            width: 100%;
        }
    </style>

    <?php
}

add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data
    $allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );

    // Make sure your data is set before trying to save it
    if( isset( $_POST['product_name'] ) )
        update_post_meta( $post_id, 'product_name', wp_kses( $_POST['product_name'], $allowed ) );

    if( isset( $_POST['product_image'] ) )
        update_post_meta( $post_id, 'product_image', wp_kses( $_POST['product_image'], $allowed ) );

    if( isset( $_POST['product_url_aff'] ) )
        update_post_meta( $post_id, 'product_url_aff', wp_kses( $_POST['product_url_aff'], $allowed ) );

    if( isset( $_POST['product_price'] ) )
        update_post_meta( $post_id, 'product_price', wp_kses( $_POST['product_price'], $allowed ) );

    if( isset( $_POST['product_discount'] ) )
        update_post_meta( $post_id, 'product_discount', wp_kses( $_POST['product_discount'], $allowed ) );

    if( isset( $_POST['product_af_discount'] ) )
        update_post_meta( $post_id, 'product_af_discount', wp_kses( $_POST['product_af_discount'], $allowed ) );

    if( isset( $_POST['product_pc_discount'] ) )
        update_post_meta( $post_id, 'product_pc_discount', wp_kses( $_POST['product_pc_discount'], $allowed ) );

}
