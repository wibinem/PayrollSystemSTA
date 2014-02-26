<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Halaman Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  
    <!-- Styles -->
  <link href="<?php echo(CSS.'chosen.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo(CSS.'bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo(CSS.'avocado.css'); ?>" rel="stylesheet" type="text/css" id="theme-style">
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

     <div class="container">  

        
        <?php 
        $attributes = array('class' => 'form-signin form-horizontal');
        echo form_open('verify_login',$attributes); ?>
        <div class="top-bar">
          <h3><i class="icon-leaf"></i> Login<b>Aplikasi</b></h3>
        </div>
        <div class="well no-padding">
            <center><?php echo validation_errors(); ?></center>
          <div class="control-group">
            <label class="control-label" for="inputName"><i class="icon-user"></i></label>
            <div class="controls">
              <input type="text" id="username" name="username" placeholder="Username">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputUsername"><i class="icon-key"></i></label>
            <div class="controls">
              <input type="password" id="password" name="password" placeholder="Password">
            </div>
          </div>

        <div class="padding">
          <button class="btn btn-primary" type="submit">Sign in</button>
          <button class="btn" type="submit">Forgot Password</button>
          </div>
        </div>
      </form>

    </div> 


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

