<?php get_header(); ?>
        <nav class="nav justify-content-center sticky-top" id="mainNav">
            <a class="logo wow fadeIn" href="#" data-toggle="modal" data-target="#brandModal"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" class="mb-4"></a>
            <a class="nav-link js-scroll-trigger" href="#brand">Home</a>
            <a class="nav-link js-scroll-trigger"  href="#about">About</a>
            <a class="nav-link js-scroll-trigger" href="#work">Work</a>
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </nav>


        <div class="wrapper">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    EI!
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_title(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

<?php get_footer(); ?>