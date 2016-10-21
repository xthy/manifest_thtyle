<?php get_header(); ?>

<div id="coreContent">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post hentry single" id="post-<?php the_ID(); ?>">
      <div class="postContent">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <div class="entry-content">
  				<?php the_content('<p class="serif">자세히 읽기 &raquo;</p>'); ?>
        </div>
      </div>
   </div>

	<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>
