<?php get_header(); ?>
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block3 clearfix parallax">
			<div class="container center">
				<h2><?php the_title(); ?></h2>
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
                              
                                  <div class="row">
                                    <div class="col-md-6">
                                      <?php the_content(); ?>
                                    </div>
                                    <div class="col-md-6">
                                      <h4>賃料</h4>
                                      <p><?php echo get_post_meta($post->ID,'price', true) ?></p>
                                
                                      <h4>交通アクセス</h4>
                                      <p><?php echo get_post_meta($post->ID,'traffic', true) ?></p>
                                
                                      <h4>物件説明文</h4>
                                      <p><?php echo get_post_meta($post->ID,'article_description', true) ?></p>
                                    </div>
                                  </div>

                                        
                                        <table class="table table-responsive">
                                        	<tbody>
                                        	<tr>
											  <td class="active">物件名</td>
											  <td><?php echo get_post_meta($post->ID,'article_name', true) ?></td>
											  <td class="active">最終更新日</td>
											  <td><time datetime="<?php the_time('y-m-d'); ?>"></time>
                                    <?php the_time( get_option('date_format') ); ?></td>
											</tr>
											<tr>
											  <td class="active">賃料</td>
											  <td><?php echo get_post_meta($post->ID,'price', true) ?></td>
											  <td class="active">物件番号</td>
											  <td><?php echo get_post_meta($post->ID,'article_num', true) ?></td>
											</tr>
											<tr>
											  <td class="active">敷金</td>
											  <td>0円</td>
											  <td class="active">取引形態</td>
											  <td>売主/貸主</td>
											</tr>
											<tr>
											  <td class="active">礼金</td>
											  <td>0円</td>
											  <td class="active">築年数</td>
											  <td><?php echo get_post_meta($post->ID,'age', true) ?></td>
											</tr>
											<tr>
											  <td class="active">補償金<br>事務手数料</td>
											  <td>0円</td>
											  <td class="active">更新料または<br>再契約量</td>
											  <td>-</td>
											</tr>
											</tbody>
                                        </table>
                                        
                                        <table class="table table-responsive">
                                        	<tbody>
                                        		<tr>
                                        		  <td class="active">所在地</td>
												  <td><?php echo get_post_meta($post->ID,'location', true) ?></td>
												</tr>
												<tr>
												  <td class="active">交通</td>
												  <td><?php echo get_post_meta($post->ID,'traffic', true) ?></td>
                                        		</tr>
                                        	</tbody>
                                        </table>
<!--                                         <p><?php echo apply_filters('the_content', get_post_meta($post->ID, 'status', true)); ?></p> -->
										<?php if(get_field('bukken_repeat')): ?>
										 <table class="table table-responsive t_repeat">
										 <?php while(has_sub_field('bukken_repeat')): 
											 $image = get_sub_field('room_img');
										 ?>
	                                        	<tbody>
		                                        	<tr class="active">
													  <td class="active">部屋番号</td>
													  <td class="active">イメージ</td>
													  <td class="active">間取り</td>
													  <td class="active">価格</td>
													  <td class="active">専有面積</td>
													  <td class="active">入居時期</td>
		                                        	</tr>
													<tr>
													  <td><?php the_sub_field('room_num'); ?></td>
													  
													  <td><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></td>
													  
													  <td><?php the_sub_field('room_type'); ?></td>
													  
													  <td><?php the_sub_field('room_price'); ?></td>
													  
													  <td><?php the_sub_field('room_width'); ?></td>
													  
													  <td><?php the_sub_field('room_state'); ?></td>
													</tr>
	                                        	</tbody>
	                                        	<?php endwhile; ?>
											 </table>
											 <?php endif; ?>
										
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
	
	<style type="text/css">
  
.acf-map {
    width: 100%;
    height: 400px;
    border: #ccc solid 1px;
    margin: 20px 0;
}
  
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {
  
/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $el (jQuery element)
*  @return  n/a
*/
  
function render_map( $el ) {
  
    // var
    var $markers = $el.find('.marker');
  
    // vars
    var args = {
        zoom        : 16,
        center      : new google.maps.LatLng(0, 0),
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
  
    // create map               
    var map = new google.maps.Map( $el[0], args);
  
    // add a markers reference
    map.markers = [];
  
    // add markers
    $markers.each(function(){
  
        add_marker( $(this), map );
  
    });
  
    // center map
    center_map( map );
  
}
  
/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $marker (jQuery element)
*  @param   map (Google Map object)
*  @return  n/a
*/
  
function add_marker( $marker, map ) {
  
    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
  
    // create marker
    var marker = new google.maps.Marker({
        position    : latlng,
        map         : map
    });
  
    // add to array
    map.markers.push( marker );
  
    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content     : $marker.html()
        });
  
        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {
  
            infowindow.open( map, marker );
  
        });
    }
  
}
  
/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   map (Google Map object)
*  @return  n/a
*/
  
function center_map( map ) {
  
    // vars
    var bounds = new google.maps.LatLngBounds();
  
    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){
  
        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
  
        bounds.extend( latlng );
  
    });
  
    // only 1 marker?
    if( map.markers.length == 1 )
    {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else
    {
        // fit to bounds
        map.fitBounds( bounds );
    }
  
}
  
/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type    function
*  @date    8/11/2013
*  @since   5.0.0
*
*  @param   n/a
*  @return  n/a
*/
  
$(document).ready(function(){
  
    $('.acf-map').each(function(){
  
        render_map( $(this) );
  
    });
  
});
  
})(jQuery);
</script>

	<?php get_footer('2'); ?>