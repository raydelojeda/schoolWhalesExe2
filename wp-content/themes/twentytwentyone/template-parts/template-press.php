<?php
/*Template Name: Press*/
get_header();
query_posts(array(
    'post_type' => 'press'
)); ?>
<ul>
<?php
while (have_posts()) : the_post(); ?>
    <li>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
    </li>

<?php endwhile;?>

</ul>
<?php
get_footer();
?>
