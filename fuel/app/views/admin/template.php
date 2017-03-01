<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php 						
		echo Asset::css(array('bootstrap/css/bootstrap.min.css',
		'dist/css/AdminLTE.min.css',
		'dist/css/skins/_all-skins.min.css',
		'plugins/iCheck/flat/blue.css',
		'plugins/morris/morris.css',
		'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
		'plugins/daterangepicker/daterangepicker.css',
		'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); 
	?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	

</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php if ($current_user): ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Police</b>Clearance</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

     
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <?php $filename =  Auth::get('filename'); ?>
        <?php if (empty($filename)): ?>
        			<?php $filename = "no.png" ?>
        <?php endif ?>
           <?php echo Html::img('files/'.$filename, array("alt" => "User Image", 'class' => "img-circle")); ?>
        </div>
        <div class="pull-left info">
          <p><?php echo Auth::get('firstname').' '.Auth::get('middlename').' '.Auth::get('lastname'); ?></p>
          
        </div>
      </div>  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
   		<li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
			<?php //echo Html::anchor('admin', 'Dashboard') ?>
		</li>
		<!-- Navigation for admin users -->
		<?php if (Auth::get('group') == 100): ?>
				<?php
					$files = new GlobIterator(APPPATH.'classes/controller/admin/*.php');
					foreach($files as $file)
					{
						$section_segment = $file->getBasename('.php');
						$section_title = Inflector::humanize($section_segment);
						?>
						<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
						<?php if ($section_title == "Clearanceform"): ?>
								<?php $section_title = "Clearance Form"; ?>
						<?php endif ?>
							<?php echo Html::anchor('admin/'.$section_segment, $section_title) ?>
						</li>
						<?php
					}
				?>
		<?php endif ?>
		<!-- End navigation for admin users -->
		<!-- Navigation For normal users -->
		<?php if (Auth::get('group') == 50): ?>
			<li><?php echo Html::anchor('admin/clearanceform/create', 'Apply Clearance') ?></li>
		<?php endif ?>
		<!-- End Navigation For normal users -->
		
		<li><?php echo Html::anchor('admin/logout', 'Logout') ?></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!--    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
    	<?php if (Session::get_flash('success')): ?>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<p>
							<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
							</p>
						</div>
		<?php endif; ?>
		<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
		<?php endif; ?>
		<?php echo $content; ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2017 Police Clearance </strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php endif; ?>
	<?php if (!$current_user): ?>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			<div class="col-md-12">
<?php echo $content; ?>
			</div>
		</div>
		<hr/>
		
	</div>
<?php endif; ?>


	<?php echo Asset::js(array(
		'plugins/jQuery/jquery-2.2.3.min.js',
		'bootstrap.js',
		'bootstrap/js/bootstrap.min.js',
		'plugins/morris/morris.min.js',
		'plugins/sparkline/jquery.sparkline.min.js',
		'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
		'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
		'plugins/knob/jquery.knob.js',
		'plugins/daterangepicker/daterangepicker.js',
		'plugins/datepicker/bootstrap-datepicker.js',
		'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
		'plugins/slimScroll/jquery.slimscroll.min.js',
		'plugins/fastclick/fastclick.js',
		'dist/js/app.min.js',
		'dist/js/pages/dashboard.js',
		'dist/js/demo.js'
	)); ?>



<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>


</body>
</html>
