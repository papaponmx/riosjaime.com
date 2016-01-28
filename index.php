<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freelance Web Designer</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/foundation-icons.css">

  <!-- My styles -->
  <link rel="stylesheet" href="style.css">
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
        <li><a href="#">About</a></li>
        <li><button type="button" class="button" data-open="contactmodal">Contact Me</button></li>
      </ul>
    </div>
  </nav>

<!--Here starts the content-->
<div class="hero-img">
	<div class="content">
		<h1>WEB DESIGNER / FRONT-END DEVELOPER / UX DESIGNER</h1>
    <hr><h3>Hello, I'm Jaime. Specializing in web design, front-end development and digital media.</h3>

      <button class="button" id="see-more"><a href="#services">See more!</a></button>
      <button class="button" id="about" href="#">Resume <i class="fi-page"></i></button>
      <button class="button" id="contact" data-open="contactmodal">Contact <i class="fi-mail"></i></button>


	</div>
</div>

<div id="services">
<h1 class="text-center">Some of my work</h1>
</div>

  <div class="soda text-center">

  <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover='false' tabindex=1 title="Please have a drink"><img src="img/rect4257.png" alt="This is a refresing beberage" id="soda can"/></span>
  </div>


  <div class="text-center" id="what">
  <h1>What can I do for <span>you</span>?</h1>
  </div>
  <div class="text-center"id="what-description">
    <br>
    <h2> Responsive Development</h2><i class="fi-monitor fi"> </i><i class="fi-laptop fi"></i>  <i class="fi-mobile fi"></i>
    <blockquote>Awesome, no matter where you are.</blockquote>
    <h2>Website Optimization </h2>

      <i class="fi-database fi"></i> <i class="fi-clock fi"></i> <i class="fi-graph-trend fi"></i>
      <blockquote>Make your website faster.</blockquote>
      <h2>Designs & Interfaces </h2>
      <i class="fi-torsos-all fi"></i> <i class="fi-heart fi"></i> <i class="fi-check fi"></i>
      <blockquote id="ux">Enhanced UX we all love.</blockquote>

  </div>

<!-- This logo is not so relevant for the user, it just enhances the UX
<div class="text-center row" id="ship">
  <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover='false' tabindex=1 title="Say Aaaarrrrgggghhhh!"><img src="img/ship.png" alt="This is a ship logo" id="ship-logo"/></span>

</div>


-->
<div class="text-center" id="who">
<h1>Who I am</h1>

<img id="profile"src="img/profile2.jpg" alt="This is my profile picture" />
<p class="text-justify"> Hello, my name is Jaime Rios. I'm a qualified <span>Front End Developer</span> specialized in <span>UX</span>, with a good grasp of <span>PHP</span> and <span>WordPress</span>. I am ready to advise and educate on how to optimize your users' experience on your site.<br>My work is driven by equal parts passion and complete nerddom.
</p>

      <button class="button" id="contact" href="#" data-open="contactmodal">Contact me<i class="fi-mail"></i></button>


</div>


<!--Here is the footer yo! -->
<footer class="footer text-center">
	<h4 class="">My social networks  </h4><a href="https://facebook.com/jaimemadrigalrios"><i class="fi-social-facebook"></i> <a href="https://twitter.com/papaponmx"><i class="fi-social-twitter"></i> <a href="https://github.com/papaponmx"><i class="fi-social-github"></i></a> <a href="https://teamtreehouse.com/jaimemadrigalrios"><i class="fi-social-treehouse"></i></a>

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
</body>
</html>
