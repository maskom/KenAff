<div class="col-md-4 grid-item">
    <div class="card  ">
        <img class="card-img-top" src="<?php echo get_post_meta(get_the_ID(), 'product_image', TRUE); ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'product_price', TRUE); ?></p>
            <a href="#" class="btn btn-danger">Go somewhere</a>
        </div>
    </div>

</div>
