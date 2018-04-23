<article <?php post_class('card list-card'); ?>>
  <div class="card-block">
    <header>
      <?php if (get_post_type() === 'post') { get_template_part('templates/tag-meta'); } ?>
      <h3 class="entry-title card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="card-subtitle mb-2 text-muted">
        <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
      </div>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
