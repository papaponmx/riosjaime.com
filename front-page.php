
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
<div class="container-fluid the-main-grid"> <!--THIS IS THE MAIN CONTAINER-->

     <div class="row first-row"> <!--THIS IS THE first ROW-->
       <div class="col-sm-4 text-square web-square grid-div">
        <h2 class= "title" id="web-title">WEB</h2>
       <h4 class="text-center">Focused on accesibility and UX. <br><br></h4>
       </div>
       <div class="col-sm-4 grid-div hidden-xs	">
         <img class="grid-img" id="responsive" src="<?php echo get_template_directory_uri(); ?>/img/screen.png" alt="This is an image of a responsive website">
      </div>
       <div class="col-sm-4 grid-div hidden-xs" id="seo">

        <h2 class= "subtitle">Responsive <br>Web <br>Design</h2>
       </div>


     </div> <!--ENDS FIRST ROW-->

     <div class="row second-row"> <!--Second row-->
            <div class="col-sm-4 grid-div hidden-xs	" id="wp-text">
              <h2>WordPress <br>Theme <br>Development</h2>

            </div>
              <div class="col-sm-4 center-block   wordpress-logo grid-div hidden-xs	" id="wpimg-div">
            <img class="grid-img nested-grid-img img-circle"id="wpimg" src="<?php echo get_template_directory_uri(); ?>/img/wordpress-logo-notext-rgb.png" alt="This is WordPress logo">
              </div>

        <div class="col-sm-4 code text-square grid-div">
          <h2 class="title" id="code-title">CODE</h2>
          <h4>Some of my projects are handcoded with HTML5, CSS3, Responsive Frameworks (Bootstrap, Foundation) Jquery and PHP. <br><br></h4>
        </div>

     </div> <!--ENDS SECOND ROW-->

      <div class="row third-row">      <!--STARTS THIRD ROW-->
      <div class="col-sm-3 text-square software-square grid-div">
        <h2>Working Abroad</h2>
        <h3>Current Location </h3>
        <h4>Mexico City</h4>

<br><br>
      </div>
      <div class="col-sm-6 adobe grid-div back-img hidden-xs">

<!--This should be an image I created--> <img class="grid-img nested-grid-img img-rounded"id="keyboard" src="<?php echo get_template_directory_uri(); ?>/img/wordpress-theme-development.jpg" alt="Just an image">


      </div>
      <div class="col-sm-3 adobe grid-div social-networks">
<h3>Social Networks</h3>
<a href="https://github.com/papaponmx">  <img class="grid-img glycon" id="github" src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt="This is GitHub logo"></a>

<a href="https://twitter.com/papaponmx"><img class="grid-img glycon" id="twitter" src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="This is Twitter logo">
    </a>

    <a href="https://www.facebook.com/jaimemadrigalrios"><img class="grid-img glycon" id="fb" src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Facebook logo"></a>

  </div>




  </div> <!--ENDS THIRD ROW -->

  <div class="row fourth-row">      <!--STARTS FOURTH ROW-->
  <div class="col-sm-2 grid-div"  id="french">
   <h3>OUI <br>Je parle Francais<br><br><br><br><br><br> </h3>
  </div>
  <div class="col-sm-2 grid-div" id="spanish">
    <h3 >Sí<br>Yo hablo español <br><br><br><br><br><br> </h3>
  </div>
  <div class="col-sm-8 text-square text-justify grid-div" id="about-div">

    <h2 class="title" id="about">  ABOUT ME <br></h2>
  <h5>  First off, thanks for taking the time to visit my website and for getting to know me and my work.
<br><br>
    I am a Front End Developer/Web Designer based in Mexico City, Mexico. I am also a college student, public speaker, avid reader. I enjoy learning languages, dancing, traveling and meeting new people. <br><br>

<br><br></h5>
  </div>
</div> <!--ENDS fourth ROW -->








</div> <!--ENDS CONTAINER-->


     <?php get_footer(); ?>
