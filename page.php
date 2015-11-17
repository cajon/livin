<?php get_header(); ?>
		<!-- BREADCRUMBS -->
		<section class=" clearfix parallax">
	      <?php if(is_page('equipment')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg2.png" alt="設備・仕様">
	        <?php elseif(is_page('searchform')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg1.png" alt="検索ページ">
	        <?php elseif(is_page('customer')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg3.png" alt="ご入居の方へ">
	        <?php elseif(is_page('faq')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg4.png" alt="Q&A">
	        <?php elseif(is_page('service')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg5.png" alt="法人">
	        <?php elseif(is_page('owner')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg6.png" alt="貸したい方">
	        <?php elseif(is_page('company')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg7.png" alt="会社情報">
	        <?php elseif(is_page('recruit')): ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg10.png" alt="採用">
	        <?php else: ?>
	          <img src="<?php bloginfo('template_url'); ?>/images/bg9.png" alt="お問い合わせ">
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

						 <p>
                              <?php while(have_posts()): the_post(); ?>
                                        <?php the_content(); ?>
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
	<div class="clearfix"></div>
	<?php get_footer('2'); ?>