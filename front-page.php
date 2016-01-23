
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

<!--Here comes the awesome grid this should loop trough the posts, creating a 3 columns grid-->

<div class="row"> <!--This row loops trhought the portfolio elements-->
  <div class= "col-xs-12 portfolio-header text-center">
    <h2>Here is some of my recent work</h2>

  </div>

  <?php
    $args = array (
    'post_type' => 'portfolio'
  );
  $the_query = new WP_Query ( $args );
   ?>

    <?php if ( have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();?>

   <div class="col-xs-3 portfolio-piece text-center">

     <?php
       $thumbnail_id = get_post_thumbnail_id();
       $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 150, true );
     ?>

     <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></a></p>
     <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

 </div>

 <?php $portfolio_count = $the_query->current_post + 1; ?>
 <?php if ( $portfolio_count % 4 == 0): ?>

 </div><div class="row">

 <?php endif; ?>


 <?php endwhile; endif; ?>



</div>









<!-- This is the button with the contact form -->
<footer class="footer">
  <div class="container grid-div">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg contact-btn center-block" data-toggle="modal" data-target="#myModal" id="contact-btn">
      Contact me <span class="glyphicon glyphicon-envelope"></span>
    </button>

  </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact me</h4>
      </div>
      <div class="modal-body">

        <?php
          if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
        ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>






     <?php get_footer(); ?>
