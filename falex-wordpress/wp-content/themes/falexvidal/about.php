    <!-- ABOUT -->
    <section id="about" class="pt-5 pb-5">
      <div class="container">
          <div class="row align-col">
              <?php $myBio = array( 'post_type' => 'bio', 'posts_per_page'=> '1' );
                    $loop = new WP_Query( $myBio );
                ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
              <div class="col-lg-8 col-md-12">
                  <div class="row mt-4 mb-5">
                      <div class="col-md-12 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                          <h2>About</h2>
                      </div>
                  </div>
                  <div class="row description wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                      <div class="col-lg-6 col-md-12">
                          <?php the_field('bio_column_1'); ?>
                          <!--<p>My name is Francisco Alexandre, also known as Falex. I was born in Brazil, but I'm currently living in Toronto, ON, Canada.</p>
                          <p>I'm a Digital Designer seeking to combine creative ideas with user-centered needs by delivering, measuring and refining valuable solutions in a continuous process of improvement and learning.</p>
                          <p>I worked for a wide array of clients, from small to big companies. I can highlight projects for brands like <strong>HP</strong>, <strong>LG</strong>, <strong>Dell</strong> and many others.</p>-->
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <?php the_field('bio_column_2'); ?>
                          <!--<p>I have developed many skills over the years, as you can check in <a href="#" data-toggle="modal" data-target="#brandModal">my video reel</a>.</p>
                          <p>I like to think of myself not only as a visual designer but also as a strategist who delivers valuable and smart solutions.</p>
                          <p>In my resume below you can find all technical skills and check out my proficiency.</p>
                          <p>Currently I'm available for part time, contract and freelance jobs. <a class="js-scroll-trigger" href="#contact">Contact me</a> if you're interested in working together.</p>-->
                    </div>
                </div>
                <div class="row resume mt-5 mb-5">
                    <div class="resume col-lg-12 text-center module">
                        <!--<a href="<?php echo get_bloginfo('template_url') ?>/resume-falex.pdf" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/bt-download-resume.png"></a>-->
                        <a href="<?php the_field('resume'); ?>" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/bt-download-resume.png"></a>
                    </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              <div class="sidekick col-lg-4 col-md-12 sidekick text-center mt-5 module">
                  <img src="<?php echo get_bloginfo('template_url') ?>/images/sidekick.png">
              </div>
          </div>
        </div> 
      </section>