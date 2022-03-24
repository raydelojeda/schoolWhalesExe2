<?php
/*Template Name: Press*/
get_header();
query_posts(array(
    'post_type' => 'press'
)); ?>
<div id="wpcontent">
<?php
while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

    <p><?php the_excerpt(); ?></p>
</div>
<?php endwhile;
get_footer();
?>
