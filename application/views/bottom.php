	<!-- Footer -->
	<footer>
    	<div class="container">
            <div class="row copy">
            	<div class="col-sm-6">
                	<h6>© <?= date('Y')?> Grupo ProActivE.</h6>
              </div>
              <div class="col-sm-6">
                <ul>
                  <!--li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-vimeo"></i></a></li>
                  <li><a href="#"><i class="icon-behance"></i></a></li-->
                  <li><a href="#"><i class="icon-twitter-circled"></i></a></li>
                  <li><a href="#"><i class="icon-facebook-circled"></i></a>
                </ul>
              </div>
            </div>

        </div>
    </footer>
    <!-- end Footer -->




  <a href="#" class="scrollup"><i class="icon-up-open"></i></a>

    <?php
    $scripts = array(
    'jquery-1.9.1.min.js',
    'bootstrap.min.js',
    'easing.js',
    'toucheffects.js',
    'lightbox-2.6.min.js',
    'modernizr.custom.26633.js',
    'jquery.gridrotator.js',
    'nav/jquery.scrollTo.js',
    'nav/jquery.nav.js',
    'script.js',
     );
    foreach ($scripts as $file) {
      echo '<script src="'.base_url('assets/js/'.$file).'"></script>';
      # code...
    }
     ?>
    <!--[if lt IE 8]><script src="js/respond.min.js"></script><![endif]-->

</body>
</html>
