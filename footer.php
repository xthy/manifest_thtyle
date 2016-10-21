</div>
<div id="footer">
  <!-- Search Field -->
  <div class="footerContent">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <div id="search">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="검색" />
      </div>
    </form>
  </div>
  <!-- Footer Links -->
  Proudly powered by <a href="http://wordpress.org/">WordPress</a> | Theme: <a href="http://jimbarraud.com/manifest/">Manifest</a>
   
</div>
<?php wp_footer(); ?>
</body>
</html>
