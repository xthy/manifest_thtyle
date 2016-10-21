<?php get_header(); ?>

    <div id="coreContent" class="hfeed">
      
    	<?php if (have_posts()) : ?>

    		<?php while (have_posts()) : the_post(); ?>

      <div class="post hentry">
      <h5 class="postDate"><abbr class="published"><?php the_date('Y-m-d');?> <?php the_category(', ');?></abbr></h5> 
        <div class="postContent">
          <h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          <div class="entry-content">
              <?php the_content('읽기 &raquo;'); ?>
          </div>
        </div>
        <div class="postMeta">
        
        <?php if ('closed' == $post->comment_status) : ?>
          <div class="comments closed">
         	<?php else : ?>
          <div class="comments">
          <?php endif; ?>
            <!--<?php comments_popup_link('leave a comment', '1 comment', '% comments', '', 'comments closed'); ?>-->
          </div>
        </div>
      </div>

		<?php endwhile; ?>

    <div class="pageNav">
      <div class="prev"><?php next_posts_link('&laquo; 이전 글 목록') ?></div>
      <div class="next"><?php previous_posts_link('최신 글 목록 &raquo;') ?></div>
    </div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

  </div>


<?php get_footer(); ?>
