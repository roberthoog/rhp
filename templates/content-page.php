<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>

  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<!--GOOGLE -->

 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-side"
     data-ad-layout-key="-dn+15-a7+1m+y1"
     data-ad-client="ca-pub-7778468649705015"
     data-ad-slot="6449681887"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<?php endwhile; ?>