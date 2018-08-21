     <!-- FOOTER -->
      <section class="pb-5 module" id="footer">
          <div class="container">
              <div class="row pb-3">
                  <div class="bgf col-lg-6 col-md-12 wow text-center slideInDown">
                      <img src="<?php echo get_bloginfo('template_url') ?>/images/footer.jpg">
                  </div>
                  <div class="bgd col-lg-6 col-md-12 text-center pt-5 mt-3 module">
                      <h1>Falex</h1>
                      <span>Digital Designer</span>
                      <div class="logos text-center">
                          <!--<a href="https://www.linkedin.com/in/falex/" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-linkedin.png"></a>
                          <a href="https://www.behance.net/falexvidal" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-behance.png"></a>
                          <a href="https://www.youtube.com/channel/UCU5OF1LVHvy4nCQsFfxV5zg?view_as=subscriber" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-youtube.png"></a>-->
                            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>
	                   <?php endif; ?>
                      </div>
                      <p class="copyright">&copy; Copyright 2017. All Rights Reserved.</p>
                  </div>
              </div>
          </div>
      </section>
      
        <!-- Modal -->
        <div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="brandModalLabel" aria-hidden="true">
            
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">            
                  <div class="video-container">
                     <iframe class="video" src="https://www.youtube.com/embed/GGXW4cwlspM?rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div>
            </div>
          </div>
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo("template_url"); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo("template_url"); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts -->
      <script src="<?php bloginfo("template_url"); ?>/js/functions.js"></script>
      <script src="<?php bloginfo("template_url"); ?>/js/scroll.js"></script>
      
      <?php wp_footer(); ?>
  </body>
</html>