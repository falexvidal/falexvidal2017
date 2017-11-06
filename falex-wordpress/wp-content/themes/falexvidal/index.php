<?php get_header(); ?>
        <nav class="nav justify-content-center sticky-top" id="mainNav">
          <a class="nav-link js-scroll-trigger" href="#brand">Home</a>
          <a class="nav-link js-scroll-trigger"  href="#about">About</a>
          <a class="nav-link js-scroll-trigger" href="#work">Work</a>
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </nav>

    <?php get_template_part('brand',get_post_format()); ?>

    <?php get_template_part('about',get_post_format()); ?>

    <?php get_template_part('work',get_post_format()); ?>

    <?php get_template_part('contact',get_post_format()); ?>
      
 <?php get_footer(); ?>