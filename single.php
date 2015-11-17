<?php get_header(); ?>
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block4 clearfix parallax">
			<div class="container center">
<!-- 				<h2><?php the_title(); ?></h2> -->
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

						     <p>
                               <?php while(have_posts()): the_post(); ?>
                              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                     <?php the_content(); ?>
                                        
                                       
                                        <p><?php 
  
												$location = get_field('gmap');
												  
												if( !empty($location) ):?>
												<div class="acf-map">
												    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
												</div>
												<?php endif; ?></p>
                                        
                                    <?php endwhile; ?>
                            </p>

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