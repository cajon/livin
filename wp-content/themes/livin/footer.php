
  <!-- FOOTER -->
  <footer>
    <!-- CONTAINER -->
    <div class="container">
      <!-- ROW -->
      <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
        <div class="col-sm-8 col-sm-offset-2 padbot30">
          <!-- <h4>Site</h4> -->
          <ul>
            <li><a href="<?php echo home_url(); ?>">HOME</a></li>
            <li><a href="<?php echo home_url(); ?>/searchform">物件検索</a></li>
            <li><a href="<?php echo home_url(); ?>/equipment">設備・仕様</a></li>
            <li><a href="<?php echo home_url(); ?>/customer">ご入居の方へ</a></li>
            <li><a href="<?php echo home_url(); ?>/faq">Q&amp;A</a></li>
            <li><a href="<?php echo home_url(); ?>/owner">貸したい方</a></li>
            <li><a href="<?php echo home_url(); ?>/company">会社情報</a></li>
            <li><a href="<?php echo home_url(); ?>/recruit">採用情報</a></li>
            <li><a href="<?php echo home_url(); ?>/blog">ブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
          </ul>
<br>
          <!-- <h4>Company</h4> -->
          <h5>株式会社 リヴイン</h5>
          <p>〒106-0032<br>
          東京都港区六本木7丁目18-18　住友不動産六本木通ビル10F<br>
          TEL.03-6447-1117<br>
          FAX.03-6447-4443</p>
          <ul class="social">
            <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
            <!-- <li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
            <li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
            <li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li> -->
          </ul>
          Copyright&copy; 2010 liv-in  All Right Reserved.
        </div>

        <div class="respond_clear"></div>

      </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
  </footer><!-- //FOOTER -->


</div>
<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url' ); ?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.nicescroll.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/superfish.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/owl.carousel.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.mb.YTPlayer.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/animate.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.BlackAndWhite.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/myscript.js" type="text/javascript"></script>
  <script>
    //PrettyPhoto
    jQuery(document).ready(function() {
      $("a[rel^='prettyPhoto']").prettyPhoto();
    });
    //BlackAndWhite
    $(window).load(function(){
      $('.client_img').BlackAndWhite({
        hoverEffect : true, // default true
        // set the path to BnWWorker.js for a superfast implementation
        webworkerPath : false,
        // for the images with a fluid width and height
        responsive:true,
        // to invert the hover effect
        invertHoverEffect: false,
        // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
        intensity:1,
        speed: { //this property could also be just speed: value for both fadeIn and fadeOut
          fadeIn: 300, // 200ms for fadeIn animations
          fadeOut: 300 // 800ms for fadeOut animations
        },
        onImageReady:function(img) {
          // this callback gets executed anytime an image is converted
        }
      });
    });
  </script>
  
</body>
</html>