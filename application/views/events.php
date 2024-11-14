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
            <li class="nav-item active">
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
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/5/website/contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Events
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Events</li>
      </ol>

      <div class="row">

         <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Event Title</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Event Time</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Event Venue</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Event Date</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Event Posted</th>
                             
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($getEvents))
                                                {
                          foreach ($getEvents as $value)
                          { ?>
                            <tr>
                              
                              <td><?=$value->event_title?></td>
                              <td><?=$value->event_time?></td>
                              <td><?=$value->event_venue?></td>
                              <td><?=$value->event_date?></td>
                              <td><?=$value->event_posted?></td>
        
                              
                            </tr>
                        <?php }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

        <!-- Blog Entries Column -->
        <div class="col-md-12">
					

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<br><br><br><br><br><br><br>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Tuguegarao Northeast Central School</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>

</html>