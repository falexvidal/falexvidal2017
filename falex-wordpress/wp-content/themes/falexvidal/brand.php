    <!-- HEAD -->
      <section id="brand">
          <div class="container">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6 text-center pt-4 mt-4">
                      <a class="logo wow fadeIn" href="#" data-toggle="modal" data-target="#brandModal"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" class="mb-4"></a>
                      <div class="logos text-center wow fadeIn" data-wow-delay="0.2s">
                          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('top-bar')) : else : ?>
                          <?php endif; ?>
                      </div>
                      <span class="head"><a href="#"data-toggle="modal" data-target="#brandModal"><img src="<?php echo get_bloginfo('template_url') ?>/images/head.png" class="mt-4 wow fadeIn" data-wow-delay="0.4s"></a></span>
                  </div>
                  <div class="col-md-3"></div>
              </div>
          </div>
      </section>

      <!-- REEL -->
      <section id="reel" class="pt-4 pb-4">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#brandModal">
                          <span class="oi oi-caret-right"></span> Play Video Reel</button>
                  </div>
              </div>
          </div>
      </section>