<?php get_header(); ?>
    <!-- BREADCRUMBS -->
    <section class="breadcrumbs_block clearfix parallax">
      <div class="container center">
        <h2>物件検索結果</h2>
      </div>
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
                      <!--<ul>-->
                        <?php while ( have_posts() ) : the_post(); ?>
                        <!--<li>-->

                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                        <div class="row">
                          <div class="col-md-4">
                             <a href="<?php the_permalink(); ?>">
                                <?php  
                                  //画像(返り値は「画像ID」)
                                  $img = get_field('thum');
                                  $imgurl = wp_get_attachment_image_src($img, 'full'); 
                                  if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="">
                                  <?php } ?>
                              </a>
                          </div>
                          <div class="col-md-8">
                             <p><?php echo get_post_meta($post->ID,'article_description', true) ?></p>
                             
                             <hr/>
                             <div class="col-md-6">
                               <p>
                                 所在地：<?php echo get_post_meta($post->ID,'location', true) ?><br>
                                 部屋戸数：<?php echo get_post_meta($post->ID,'room_q', true) ?><br>
                               </p>
                             </div>
                             <div class="col-md-6">
                               <p>
                                 賃料：<?php echo get_post_meta($post->ID,'price', true) ?><br>
                                 現況：<?php echo get_post_meta($post->ID,'condition', true) ?>
                               </p>
                             </div>
                             
                             <hr/>
                             
                             <p>交通：<?php echo get_post_meta($post->ID,'traffic', true) ?></p>
                          </div>
                        </div>
                          <p>
                            <span><?php the_category(','); ?></span>
                            <span><?php the_tags(); ?></span>
                          </p>
                        <!--</li>-->
                        <?php endwhile; ?>
                      <!--</ul>-->

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