<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
  <div class="col-md-4 card-list">
    <div class="wrap-figure">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-test.jpg" class="img-fluid thumb-card"/>
      </figure>

      <figcaption>
        <div class="detail">
          <h3>Labelledesign Blouse Donella - NavyBlue</h3>
          <div class=" d-flex justify-content-between align-items-center">
            <span class="price">Rp30.000</span>
            <a href="" class="btn-main buy" title="beli">BELI</a>
          </div>
        </div>
      </figcaption>
    </div>

  </div>
  <div class="col-md-4 card-list">
    <div class="wrap-figure">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-test.jpg" class="img-fluid thumb-card"/>
      </figure>

      <figcaption>
        <div class="detail">
          <h3>Labelledesign Blouse Donella - NavyBlue</h3>
          <div class=" d-flex justify-content-between align-items-center">
            <span class="price">Rp30.000</span>
            <a href="" class="btn-main buy" title="beli">BELI</a>
          </div>
        </div>
      </figcaption>
    </div>

  </div>
  <div class="col-md-4 card-list">
    <div class="wrap-figure">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-test.jpg" class="img-fluid thumb-card"/>
      </figure>

      <figcaption>
        <div class="detail">
          <h3>Labelledesign Blouse Donella - NavyBlue</h3>
          <div class=" d-flex justify-content-between align-items-center">
            <span class="price">Rp30.000</span>
            <a href="" class="btn-main buy" title="beli">BELI</a>
          </div>
        </div>
      </figcaption>
    </div>
  </div>
  <div class="col-md-4 card-list">
    <div class="wrap-figure">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-test.jpg" class="img-fluid thumb-card"/>
      </figure>

      <figcaption>
        <div class="detail">
          <h3>Labelledesign Blouse Donella - NavyBlue</h3>
          <div class=" d-flex justify-content-between align-items-center">
            <span class="price">Rp30.000</span>
            <a href="" class="btn-main buy" title="beli">BELI</a>
          </div>
        </div>
      </figcaption>
    </div>
  </div>
  <div class="col-md-4 card-list ">
    <div class="wrap-figure">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-test.jpg" class="img-fluid thumb-card"/>
      </figure>

      <figcaption>
        <div class="detail">
          <h3>Labelledesign Blouse Donella - NavyBlue</h3>
          <div class=" d-flex justify-content-between align-items-center">
            <span class="price">Rp30.000</span>
            <a href="" class="btn-main buy" title="beli">BELI</a>
          </div>
        </div>
      </figcaption>
    </div>

  </div>
  <div class="col-md-4 card-list ">
    <div class="wrap-figure">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-test.jpg" class="img-fluid thumb-card"/>
      </figure>

      <figcaption>
        <div class="detail">
          <h3>Labelledesign Blouse Donella - NavyBlue</h3>
          <div class=" d-flex justify-content-between align-items-center">
            <span class="price">Rp30.000</span>
            <a href="" class="btn-main buy" title="beli">BELI</a>
          </div>
        </div>
      </figcaption>
    </div>
  </div>

  <?php while (have_posts()) : the_post(); ?>
    <?php //get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>  
</div>

<?php the_posts_navigation(); ?>
