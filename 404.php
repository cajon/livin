<?php get_header(); ?>
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2>404 Notfound</h2>
			</div>
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

					<h3>SORRY !</h3>
                    <p>Document or file requested was not found...</p>
                    <h2>404</h2>
                    <div class="back-to-home">
                      <a href="<?php echo home_url(); ?>">Go Back to Home</a>
                    </div>

						</div><!-- //SINGLE BLOG POST -->


	

					</div><!-- //BLOG BLOCK -->
                    <?php get_sidebar(); ?>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG -->
	</div><!-- //PAGE -->
	<?php get_footer(); ?>