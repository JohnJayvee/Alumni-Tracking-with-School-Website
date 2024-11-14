<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TNECS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>css/website/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>css/website/css/modern-business.css" rel="stylesheet">

	<!-- Bootstrap core JavaScript -->
    <script src="<?=base_url();?>css/website/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>css/website/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	            <div class="image">
                    <img src="<?=base_url();?>/img/tnecs.png" style="width: 40px;"/>
                </div>
        <a class="navbar-brand" href="index.php">&nbsp;Tuguegarao Northeast Central School</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/5/website/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/5/website/news">News</a>
            </li>
      <li class="nav-item">
              <a class="nav-link" href="http://localhost/5/website/events">Events</a>
            </li>
      <li class="nav-item">
              <a class="nav-link" href="http://localhost/5/website/gallery">Gallery</a>
            </li>
                  <li class="nav-item">
              <a class="nav-link" href="http://localhost/5/website/alumni">Alumni</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/5/website/contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.4271907407197!2d121.73632531414594!3d17.629914987933645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338585c6f052d12d%3A0x5a4344355152f4cc!2sTuguegarao+Northeast+Central+School!5e0!3m2!1sen!2sph!4v1544221045423" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
		</div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            Caggay, Tuguegarao,
            <br>Cagayan 3500
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (639) 123456789          
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:lemu.nhs@gmail.com">tnecs@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 7:30 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Lemu National HS 2018</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>

</html>