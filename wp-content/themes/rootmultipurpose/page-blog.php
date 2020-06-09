<?php
/*
Template Name: Blog Page
*/
?>

<?php wp_head(); ?>
<div class="padding">
<div class="box-bg margin-bot">
<div class="wrapper">
<?php $the_query = new WP_Query( 'showposts=5' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<li><?php the_content(); ?></li>
<?php endwhile;?>
</div>
</div>
</div>
<?php
get_footer();
?>