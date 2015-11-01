<?php get_header(); ?>
    <!-- BREADCRUMBS -->
    <section class="clearfix parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/bg8.png" alt="ブログ">
    </section><!-- //BREADCRUMBS -->

    <!-- BLOG -->
    <section id="blog">
      <!-- CONTAINER -->
      <div class="container">
        <!-- ROW -->
        <div class="row contents">
          <div class="breadcrumbs">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
          </div>
          <!-- BLOG BLOCK -->
          <div class="blog_block col-lg-9 col-md-9 padbot50">
            <!-- SINGLE BLOG POST -->
            <div class="single_blog_post clearfix" data-animated="fadeInUp">


                      <?php if ( have_posts()): ?>
                      <ul>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                          <p>
                            <span>日付：<a href="<?php the_permalink(); ?>"><time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span>
                          </p>
                        <a href="<?php the_permalink(); ?>"> </a>

                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('post-thumbnails'); ?>
                        </a>
                          <p>
                            <?php the_excerpt(); ?>
                          </p>
                          <p>
                            <span>カテゴリー：<?php the_category(','); ?></span>
                            <span><?php the_tags(); ?></span>
                          </p>
                        </li>
                        <?php endwhile; ?>
                      </ul>

                      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                 <?php endif; ?>
            </div><!-- //SINGLE BLOG POST -->


                <a href="<?php echo home_url(); ?>/contact" >
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