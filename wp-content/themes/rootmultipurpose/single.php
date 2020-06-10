<?php get_header(); ?>
<div class="padding">
<div class="box-bg margin-bot">
<div class="wrapper">
<!-- WordPress Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="entry <?php if(is_home() && $post==$posts[0] && !is_paged()) echo ' firstpost';?>">
<h3 class="entrytitle" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<p class="blogdate"> <?php the_time('F jS') ?>, <?php the_time('Y') ?></p>
<div>
<?php the_content(__('Read more'));?>
</div>
<?php trackback_rdf(); ?>
</div>
<?php comments_template(); // Get comments.php template ?>
<?php endwhile; else: ?>
<p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
<?php endif; ?>
<!-- End WordPress Loop -->
</div>
</div>
<!-- end middle content area -->
<?php
get_footer();
?>
</div>
</div>
</div>