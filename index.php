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
    <p><?php esc_html_e('Sorry, no posts matched criteria.','wp-theme-1'); ?></p>
<?php } ?>

<?php 

$city = 'london';

echo esc_html__('Your city is ', 'wp-theme-1') . $city;

printf(
  esc_html__('Your city is %s', 'wp-theme-1'), $city
);

?>

<?php get_footer(); ?>
