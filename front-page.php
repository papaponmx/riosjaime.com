
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

<!--Here comes the awesome grid-->

     <h1> TESTING!!!!!</h1>

     <div class="row">
       <div class="col-sm-9">
         Level 1: .col-sm-9
         <div class="row">
           <div class="col-xs-8 col-sm-6">
             Level 2: .col-xs-8 .col-sm-6
           </div>
           <div class="col-xs-4 col-sm-6">
             Level 2: .col-xs-4 .col-sm-6
           </div>
         </div>
       </div>
     </div>


     <?php get_footer(); ?>
