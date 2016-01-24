
<?php get_header(); ?>
<?php  /**
  Template Name: Portfolio Grid Template
**/
?>



     <header>
         <div class="header-content">
             <div class="header-content-inner">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <?php the_content(); ?>

                 <<?php endwhile; endif; ?>
            </div>
         </div>
     </header>


        <div class="row"> <!--This row loops trhought the profile elements-->
          <div class= "col-sm-12 portfolio-header text-center"> 
            <h2>Here is some recent work</h2>

          </div>

          <?php
            $args = array (
            'post_type' => 'portfolio'
          );
          $the_query = new WP_Query ( $args );
           ?>

            <?php if ( have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();?>

           <div class="col-sm-3 portfolio-piece">
             <h3> <?php the_title(); ?> </h3>
           </div>
         <?php endwhile; endif; ?>

        </div>




     <?php get_footer(); ?>
