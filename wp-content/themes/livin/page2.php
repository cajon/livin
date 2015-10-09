<?php
/*
Template Name: page2 */
?>

<?php get_header(); ?>
    <!-- BREADCRUMBS -->
    <section class=" clearfix parallax">
      <?php if(is_page('equipment')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/bg2.png" alt="設備・使用">
        <?php elseif(is_page('searchform')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/bg1.png" alt="検索ページ">
        <?php elseif(is_page('customer')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
        <?php elseif(is_page('faq')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
        <?php elseif(is_page('service')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
        <?php elseif(is_page('owner')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
        <?php elseif(is_page('company')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
        <?php elseif(is_page('recruit')): ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
        <?php else: ?>
          <img src="<?php bloginfo('template_url'); ?>/images/" alt="">
      <?php endif; ?>
    </section><!-- //BREADCRUMBS -->

    <!-- BLOG -->
    <section id="blog">
      <!-- CONTAINER -->
      <div class="container">
        <!-- ROW -->
        <div class="row contents">
          <!-- BLOG BLOCK -->
          <div class="blog_block col-lg-9 col-md-9 padbot50">
            <!-- SINGLE BLOG POST -->
            <div class="single_blog_post clearfix" data-animated="fadeInUp">
                    
                   <!--ここにフォーム-->
                   
                   <?php get_search_form(); ?>
                   
            </div><!-- //SINGLE BLOG POST -->


                <a href="#" >
                  <div class="btn_contact">
                      <p>お問い合わせ</p>
                  </div>
                </a>

          </div><!-- //BLOG BLOCK -->
                    <?php get_sidebar(); ?>
        </div><!-- //ROW -->
      </div><!-- //CONTAINER -->
    </section><!-- //BLOG -->
  </div><!-- //PAGE -->
  <?php get_footer('2'); ?>