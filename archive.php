<?php get_header(); ?>

<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="archiveTitle">카테고리 : <strong><?php single_cat_title(); ?></strong></h2>

<?php /* If this is a category archive */ } elseif (is_tag()) { ?>
<h2 class="archiveTitle">태그 : <strong><?php single_tag_title(); ?></strong></h2>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="archiveTitle">월 별 정렬: <strong><?php the_time('F, Y'); ?></strong></h2> <?php } ?>

    <div id="coreContent" class="hfeed">
      
    	<?php if (have_posts()) : ?>

    		<?php while (have_posts()) : the_post(); ?>

      <div class="post hentry">
        <h5 class="postDate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php the_time('F j, Y'); ?></abbr></h5>
        <div class="postContent">
          <h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          <!-- <h4 class="vcard author">by <span class="fn"><?php the_author(); ?></span></h4> -->
          
          <div class="entry-content">

              <?php the_excerpt('자세히 읽기 &raquo;'); ?>

          </div>
        </div>
        <div class="postMeta">
        
      </div>

		<?php endwhile; ?>

    <div class="pageNav">
      <div class="prev"><?php next_posts_link('&lt; 이전 글 보기') ?></div>
      <div class="next"><?php previous_posts_link('최근 글 보기 &gt;') ?></div>
    </div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

  </div>


<?php get_footer(); ?>
