<?php get_header(); ?>
<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
        <!--<nav class="nav nav-pages justify-content-center sticky-top" id="mainNav">
            <a class="nav-link js-scroll-trigger" href="#brand">Home</a>
            <a class="nav-link js-scroll-trigger"  href="#about">About</a>
            <a class="nav-link js-scroll-trigger" href="#work">Work</a>
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </nav>-->
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="container header-portfolio">
            <div class="row mt-5 mb-5">
                <h2 class="display-4 wow fadeIn"><?php the_title(); ?></h2>
                <p class="lead wow fadeIn"><?php the_excerpt(); ?></p>
            </div>
        </div>

        <div class="container-fluid cover wow fadeIn" style="background: url('<?php echo $hero['0'];?>') fixed  center top no-repeat;">
        </div>
        
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-2">
                    <h4>Client:</h4>
                    <p><?php the_field('client'); ?></p>

                    <h4>Location:</h4>
                    <p><?php the_field('location'); ?></p>
                    
                    <h4>Tools:</h4>
                    <p><?php the_field('tools'); ?></p>

                    <h4>Category:</h4>
                    <p><?php the_category(); ?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-7 wow fadeIn">
                    <?php the_content(); ?>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <div class="container-fluid caption" style="background-image:url(<?php the_field('background_caption_image'); ?>)";>
            <div class="row">
                <div class="col-md-12 pt-5 wow fadeIn">
                    <?php the_field('caption'); ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('gallery'); ?>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>

<?php get_footer(); ?>