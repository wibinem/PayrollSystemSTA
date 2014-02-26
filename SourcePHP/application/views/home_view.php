<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>.::Selamat Datang di PT Swadaya Traktor Adiperkasa::.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <!-- Styles -->
  <link href="<?php echo(CSS.'chosen.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo(CSS.'bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo(CSS.'theme/avocado.css'); ?>" rel="stylesheet" type="text/css" id="theme-style">
  <link href="<?php echo(CSS.'prism.css'); ?>" rel="stylesheet/less" type="text/css">
  <link href="<?php echo(CSS.'fullcalendar.css'); ?>" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
  <style type="text/css">
    body { padding-top: 102px; }
  </style>
  <link href="<?php echo(CSS.'bootstrap-responsive.css'); ?>" rel="stylesheet">
  
  <!-- JavaScript/jQuery, Pre-DOM -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script src="<?php echo(JS.'charts/excanvas.min.js'); ?>"></script>
  <script src="<?php echo(JS.'charts/jquery.flot.js'); ?>"></script>
  <script src="<?php echo(JS.'jquery.jpanelmenu.min.js'); ?>"></script>
  <script src="<?php echo(JS.'jquery.cookie.js'); ?>"></script>
  <script src="<?php echo(JS.'avocado-custom-predom.js'); ?>"></script>

  <!-- HTML5, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
 </head>
 
 <body>
 
 	<!-- Top Fixed Bar -->
	<div class="navbar navbar-inverse navbar-fixed-top">

		<!-- Top Fixed Bar: Navbar Inner -->
		<div class="navbar-inner">

			<!-- Top Fixed Bar: Container -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<a href="#">
					<button type="button" class="btn btn-navbar mobile-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</a>
				<!-- / Mobile Menu Button -->

				<!-- / Logo / Brand Name -->
				<a class="brand" href="home"><i class="icon-leaf"></i> PAYROLL SYSTEM <b>PT SWADAYA TRAKTOR ADIPERKASA</b></a>
				<!-- / Logo / Brand Name -->

				<!-- User Navigation -->
				<ul class="nav pull-right">
					
					<!-- User Navigation: User -->
					<li class="dropdown">

						<!-- User Navigation: User Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user icon-white"></i> 
							<span class="hidden-phone"><?php echo $nama; ?></span>
						</a>
						<!-- / User Navigation: User Link -->

						<!-- User Navigation: User Dropdown -->
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Ganti Password</a></li>
							<li><a href="#" data-toggle="modal"><i class="icon-cog"></i> Bantuan</a></li>
							<li class="divider"></li>
							<li><a href="home/logout"><i class="icon-off"></i> Keluar</a></li>
						</ul>
						<!-- / User Navigation: User Dropdown -->

					</li>
					<!-- / User Navigation: User -->

				</ul>
				<!-- / User Navigation -->

			</div>
			<!-- / Top Fixed Bar: Container -->

		</div>
		<!-- / Top Fixed Bar: Navbar Inner -->

		<!-- Top Fixed Bar: Breadcrumb -->
		<div class="breadcrumb clearfix">

			<!-- Top Fixed Bar: Breadcrumb Container -->
			<div class="container">

				<!-- Top Fixed Bar: Breadcrumb Location -->
				<ul class="pull-left">
					<li><a href="home"><i class="icon-home"></i> Home</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Location -->

				<!-- Top Fixed Bar: Breadcrumb Right Navigation -->
				<ul class="pull-right">

					<li><a href="home/logout"><i class="icon-off"></i> Logout</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Right Navigation -->

			</div>
			<!-- / Top Fixed Bar: Breadcrumb Container -->

		</div>
		<!-- / Top Fixed Bar: Breadcrumb -->

	</div>
	<!-- / Top Fixed Bar -->

	<!-- Content Container -->
	<div class="container">

		<!-- Main Navigation: Box -->
		<div class="navbar navbar-inverse" id="nav">

			<!-- Main Navigation: Inner -->
			<div class="navbar-inner">

				<!-- Main Navigation: Nav -->
				<ul class="nav">

					<!-- Main Navigation: Dashboard -->
					<li><a href="home"><i class="icon-align-justify"></i> Dashboard</a></li>
					<!-- / Main Navigation: Dashboard -->

				</ul>
				<!-- / Main Navigation: Nav -->
			
				<!-- Main Navigation: Search -->
				<form class="navbar-search pull-right">
					<input type="text" class="search-query typeahead" placeholder="Search">
				</form>
				<!-- / Main Navigation: Search -->

			</div>
			<!-- / Main Navigation: Inner -->

		</div>
		<!-- / Main Navigation: Box -->

		<!-- Template -->
		<div class="row-fluid">

			<!-- ATemplate: Box -->
			<div class="span12">
				<!-- Add News: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-edit"></i> Bar Title</h3>
				</div>
				<!-- / Template: Top Bar -->

				<!-- Template: Content -->
				<div class="well">
                    <center><h3>Panel Menu</h3></center><br />
				</div>
				<!-- / Template: Content -->

			</div>
			<!-- / Template: Box -->
				
		</div>
		<!-- / Template -->

	</div> 
	<!-- / Content Container -->

  <!-- Footer -->
  <footer class="footer">

      <!-- Footer Container -->
      <div class="container">

        <!-- Footer Container: Content -->
        <p>Copyrighted &#169; PT Swadaya Traktor Adiperkasa 2014. All rights resserved.</p>
        <!-- / Footer Container: Content -->

      </div>
      <!-- / Footer Container -->

  </footer>
  <!-- / Footer -->
 
	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo(JS.'jquery.hotkeys.js'); ?>"></script>
	<script src="<?php echo(JS.'calendar/fullcalendar.min.js'); ?>"></script>
	<script src="<?php echo(JS.'jquery-ui-1.10.2.custom.min.js'); ?>"></script>
	<script src="<?php echo(JS.'jquery.pajinate.js'); ?>"></script>
	<script src="<?php echo(JS.'jquery.prism.min.js'); ?>"></script>
	<script src="<?php echo(JS.'jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo(JS.'charts/jquery.flot.time.js'); ?>"></script>
	<script src="<?php echo(JS.'charts/jquery.flot.pie.js'); ?>"></script>
	<script src="<?php echo(JS.'charts/jquery.flot.resize.js'); ?>"></script>
	<script src="<?php echo(JS.'bootstrap/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo(JS.'bootstrap/bootstrap-wysiwyg.js'); ?>"></script>
	<script src="<?php echo(JS.'bootstrap/bootstrap-typeahead.js'); ?>"></script>
    <script src="<?php echo(JS.'jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo(JS.'jquery.chosen.min.js'); ?>"></script>
	<script src="<?php echo(JS.'avocado-custom.js'); ?>"></script>

 </body>
</html>