<?php ; ?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--This meta tags improve SEO-->
  <meta name="description" content="Freelance Front-End Developer/ UX Designer providing the best web development services located in Mexico City">
<meta name="author" content="Jaime Madrigal Rios">
  <title>Freelance Web Designer</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <!--<link rel="stylesheet" href="css/normalize.css"> -->
  <link rel="icon"
        type="image/png"
        href="http://riosjaime.com/favicon.ico">
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/foundation-icons.css">

  <!-- My styles -->
  <link rel="stylesheet" href="style.css">

  <!-- Here goes the php if statement -->


  <!--Here ends the php if -->
</head>
<body>

  <!-- Navigation starts here -->
  <nav class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
  </nav>

  <nav class="top-bar" id="example-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Jaime Rios</li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><a href="#what">Services</a></li>
        <li><a href="#who">About</a></li>
        <li><a id="contact" data-open="contactmodal">Contact me</a></li>
      </ul>
    </div>
  </nav>

<!--Here starts the content-->
<div class="hero">
	<div class="hero-text">
		<h1>WEB DESIGNER <span>DESIGNER</span> / FRONT-END <span>DEVELOPER</span> </h1>
    <hr><h3>Hello, I'm Jaime. I turn black coffee and pizza into  engaging websites.</h3>

      <div class="text-center">

        <a href="#what"><button class="button" id="see-more">See more!</button></a>
      <!--  <button class="button" id="contact" data-open="contactmodal">Contact me</button> -->
      </div>

	</div>
</div>



  <div class="text-center row" id="what">
  <h1>What I <span>can do</span> for you</h1>
    <div class="medium-4 columns">
      <h2>Mobile Friendly</h2><i class="fi-monitor fi show-for-medium"> </i><i class="fi-laptop fi"></i>  <i class="fi-mobile fi show-for-medium"></i>
      <blockquote>Awesome, wherever you are.</blockquote>
    </div>

    <div class="medium-4 columns">
      <h2>Website Optimization </h2>
      <i class="fi-database fi"></i> <i class="fi-clock fi"></i> <i class="fi-graph-trend fi show-for-medium"></i>
      <blockquote>Make your website faster.</blockquote>
    </div>

    <div class="medium-4 columns" id="design">
      <h2>Designs & Interfaces </h2>
      <i class="fi-torsos-all fi show-for-medium"></i> <i class="fi-heart fi"></i> <i class="fi-check fi show-for-medium"></i>
      <blockquote id="ux">Enhanced UX we all love.</blockquote>
    </div>

    <div class="row">
      <div class="small-3 small-centered columns">

          <a  href="https://docs.google.com/document/d/1bKqVbohnl_aCA1EHmIoE0xgsX-679TPOSjP5Pi5irTo/edit?usp=sharing"><button class="button" id="resume-button">Check my resume</button></a>
      </div>
      </div>

</div> <!--Here ends the what row -->


  <div id="services">
  <h1 class="text-center">Do you fancy a drink?</h1>
  </div>


  <div class="drinks-area text-center">
      <div class="">

      </div>

      <div class="" id="soda">

        <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover='false' tabindex=1 title="So refreshing!"><img src="img/rect4257.png" alt="This is a refresing beberage" id="soda-can"/></span>
      </div>


    <?php
    /*
    if ($a > $b) {
        echo "a is bigger than b";
    } elseif ($a == $b) {
        echo "a is equal to b";
    } else {
        echo "a is smaller than b";
    } */
    ?>
      <div class="">

      </div>

    </div>






<!-- This logo is not so relevant for the user, it just enhances the UX
<div class="text-center row" id="ship">
  <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover='false' tabindex=1 title="Say Aaaarrrrgggghhhh!"><img src="img/ship.png" alt="This is a ship logo" id="ship-logo"/></span>
</div>
-->





<div class="text-center row" id="who">
<h1>Who I am</h1>

<div class="large-3 columns">

  <img id="profile"src="img/profile2.jpg" alt="This is my profile picture" />
</div>
<div class="large-9 columns">
  <p class="text-justify"> Hello, my name is Jaime Rios. I'm a qualified <span>Front End Developer</span>, with a good grasp of <span>PHP</span> and <span>WordPress</span>. I am ready to advise and educate on how to optimize your users' experience on your site. My work is mainly focused in User Centered Design and all the fancy words like: web standards, accesibility, cross-browser compatibility, you name it.</p>
</div>

      <button class="button" id="contact" href="#" data-open="contactmodal">Contact me</button>


</div>


<!--Here is the footer yo! -->
<footer class="footer text-center">
	<h4 class="">Where to get a hold of me:</h4><a href="https://facebook.com/jaimemadrigalrios"><i class="fi-social-facebook"></i>

  <!--<a href="https://twitter.com/papaponmx"><i class="fi-social-twitter"></i>
  -->

   <a href="https://github.com/papaponmx"><i class="fi-social-github"></i></a> <a href="https://teamtreehouse.com/jaimemadrigalrios"><i class="fi-social-treehouse"></i></a>
</footer>

<!--This is the code for the modal -->
<div class="reveal" id="contactmodal" data-reveal>
  <h3>Want to discuss your website plans? Have an offer I couldn't refuse? Just say it.</h3>

<!--Here starts the form-->
<div class="containter-fluid portfolio contact-background" id ="contact">
          <form method="post" action="contact-process.php">
            <div class="form-group">
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" id="name" name="Name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" name="Email" placeholder="Enter email" required>
            </div>
          <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control col-sm-12" rows="5"  name ="Message" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="large button">Submit</button>

</form>
</div>



  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>




<!-- Release the SCRIPTS! -->
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  <!--This is the Google Analytics code -->
    <script async>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71409801-1', 'auto');
      ga('send', 'pageview');
      </script>
</body>
</html>
