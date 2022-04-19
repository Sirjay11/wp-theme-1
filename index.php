<?php get_header(); ?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
    <?php the_post(); ?>
    <h2>
     <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a>
    </h2>

    <div>
      <?php wptheme1_post_meta(); ?>
    </div>
    <div>
      <?php the_excerpt(); ?>
    </div>
    
      <?php wptheme1_readmore_link(); ?>
    
    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else { ?>
    <p>Sorry, no posts matched crireia.</p>
<?php } ?>

<?php get_footer(); ?>

 