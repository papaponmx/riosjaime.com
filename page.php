
<?php get_header(); ?>


     <header>
         <div class="header-content">
             <div class="header-content-inner">
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                 <?php the_content(); ?>

                <<?php endwhile; endif; ?>
             </div>
         </div>
     </header>


     <?php get_footer(); ?>
