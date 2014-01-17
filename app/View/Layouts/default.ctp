<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if !IE]><!--><html class="animations fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"><!-- <![endif]-->
<head>
	<title><?php echo $this->fetch('title'); ?></title>
	
	<!-- Meta -->
	<?php echo $this->Html->meta('UTF-8'); ?>
	<?php echo $this->Html->meta('viewport','width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0') ?>
	<?php echo $this->Html->meta('apple-mobile-web-app-capable',array('content'=>'yes')); ?>
	<?php echo $this->Html->meta('apple-mobile-web-app-status-bar-style',array('content'=>'black')); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<?php echo $this->fetch('meta'); ?>
	
	<!-- Bootstrap -->
	<?php echo $this->Html->css('common/bootstrap/css/bootstrap'); ?>
	<?php echo $this->Html->css('common/bootstrap/css/responsive'); ?>	
	<!-- Glyphicons Font Icons -->
	<?php echo $this->Html->css('common/theme/fonts/glyphicons/css/glyphicons'); ?>
	<?php echo $this->Html->css('common/theme/fonts/font-awesome/css/font-awesome.min'); ?>	
	<!--[if IE 7]><?php echo $this->Html->css('common/theme/fonts/font-awesome/css/font-awesome-ie7.min');?><![endif]-->
	
	<!-- Uniform Pretty Checkboxes -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default'); ?>	    
    <!-- JQuery -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <?php //echo $this->Html->script('jquery-1.8.3');?>  
    <?php echo $this->Html->script('common/jquery-migrate-1.2.1.min');?>  

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <?php echo $this->Html->script('common/theme/scripts/plugins/system/html5shiv'); ?>
    <![endif]-->
	<!--[if IE]><!--><?php echo $this->Html->script('common/theme/scripts/plugins/other/excanvas/excanvas');?><!--<![endif]-->
	<!--[if lt IE 8]><?php echo $this->Html->script('common/theme/scripts/plugins/other/json2');?><![endif]-->
	
	<!-- Bootstrap Extended -->
	<?php echo $this->Html->css('common/bootstrap/extend/jasny-fileupload/css/fileupload'); ?>
	<?php echo $this->Html->css('common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2'); ?>
	<?php echo $this->Html->css('common/bootstrap/extend/bootstrap-select/bootstrap-select'); ?>
	<?php echo $this->Html->css('common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons'); ?>
	<!-- DateTimePicker Plugin -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker'); ?>	
	<!-- JQueryUI -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min'); ?>	

	<!-- MiniColors ColorPicker Plugin -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors'); ?>	
	
	<!-- Notyfy Notifications Plugin -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy'); ?>
	<?php echo $this->Html->css('common/theme/scripts/plugins/notifications/notyfy/themes/default'); ?>

	
	<!-- Gritter Notifications Plugin -->
    <?php echo $this->Html->css('common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter'); ?>
	
	<!-- Easy-pie Plugin -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart'); ?>

	<!-- Google Code Prettify Plugin -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/other/google-code-prettify/prettify'); ?>	
	<!-- Select2 Plugin -->
	<?php echo $this->Html->css('common/theme/scripts/plugins/forms/select2/select2'); ?>
	<!-- Pageguide Guided Tour Plugin -->
	<!--[if gt IE 8]><!--> <?php //echo $this->Html->css('common/theme/scripts/plugins/other/pageguide/css/pageguide'); ?><!--<![endif]-->

	<!-- Bootstrap Image Gallery -->
	<?php echo $this->Html->css('common/bootstrap/extend/bootstrap-image-gallery/css/bootstrap-image-gallery.min'); ?>	

	<!--DataTable-->
	<?php echo $this->Html->css('common/theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap'); ?>
	<?php echo $this->Html->css('common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/css/ColVis'); ?>
	<!-- Main Theme Stylesheet :: CSS -->
    <?php echo $this->Html->css('common/theme/css/style-default-menus-dark.css?137450651'); ?>	

    <?php echo $this->fetch('css'); ?>

	<!-- LESS.js Library -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/system/less.min'); ?>	
	<!-- Global -->
	<script>
	//<![CDATA[
	var basePath = '',
		commonPath = '../../../../../common/';

	// colors
	var primaryColor = '#e5412d',
		dangerColor = '#b55151',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';

	var themerPrimaryColor = primaryColor;
	//]]>
	</script>
</head>
<body class="document-body ">
  <!-- Main Container Fluid -->
 <div class="container-fluid menu-hidden sidebar-hidden-phone fluid menu-left">
		<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">
		
		    <!-- Sidebar Menu -->
		    <div id="menu" class="hidden-print">
			  <!-- Brand -->
			  <a href="#" class="appbrand">
			  	<span class="text-primary">Manager</span> 
			  	<span>EiC</span>
			  </a>
			  <!-- Scrollable menu wrapper with Maximum height -->
			  <div class="slim-scroll" data-scroll-height="800px">
				<!-- Menu Toggle Button -->
				<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->
			    <!-- Sidebar Profile -->
				<span class="profile center">
					<a href="#">
					<img src="http://dummyimage.com/74x74/232323/ffffff&text=photo" alt="Avatar" /></a>
				</span>
				<!-- // Sidebar Profile END -->
               <div class="clearfix"></div>
               <!-- // Menu END -->
			   <div class="menu-hidden-element alert alert-primary">
				    <a class="close" data-dismiss="alert">&times;</a>
					<p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est.
					</p>
			   </div>
            </div>
	        <!-- // Scrollable Menu wrapper with Maximum Height END -->
	    </div>
	    <!-- // Sidebar Menu END -->
				
		<!-- Content -->
		<div id="content">
		
			<!-- Top navbar -->
			<div class="navbar main">

				<!-- Menu Toggle Button -->
				<button type="button" class="btn btn-navbar pull-left visible-phone">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->
			
				<!-- Not Blank page -->
			
				<!-- Full Top Style -->
			    <ul class="topnav pull-left">
					<li class="active"><a href="#" class="glyphicons dashboard"><i></i> Dashboard</a>
					</li>
				    <li class="dropdown dd-1">
					 <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Settings<span class="caret"></span></a>
					  <ul class="dropdown-menu pull-left">
						<!-- Components Submenu Level 2 -->
						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Gestion des programmes</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class="#"><a href="<?php echo $this->Html->url(array('controller' => 'Programs', 'action' => 'ProgramAdd'));?>">Ajout de programme</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Programs', 'action' => 'ProgramList'));?>">Liste des programmes</a></li>
							</ul>
						</li>
						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Gestion des Pays</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Countries', 'action' => 'CountryAdd')); ?>">Ajout de Pays</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Cities', 'action' => 'CityAdd')); ?>">Ajout des villes</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Domaines', 'action' => 'DomaineAdd')); ?>">Ajout des domaines</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Countries', 'action' => 'CountryList')); ?>">Liste des Pays</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Cities', 'action' => 'CityList')); ?>">Liste des villes</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Domaines', 'action' => 'DomaineList')); ?>">Liste des domaines</a></li>
							</ul>
						</li>
						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Gestion des Clubs</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Teams', 'action' => 'TeamAdd')); ?>">Ajout de Clubs</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Teams', 'action' => 'TeamList')); ?>">Liste des Clubs</a></li>
							</ul>
						</li>
						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Gestion des roles</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Roles', 'action' => 'RoleAdd')); ?>">Ajout de role</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Roles', 'action' => 'RoleList')); ?>">Liste des roles</a></li>
							</ul>
						</li>
						<li class="dropdown submenu">
							<a data-toggle="dropdown" class="dropdown-toggle">Gestion des grades</a>
							<ul class="dropdown-menu submenu-show submenu-hide pull-right">
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Ranks', 'action' => 'RankAdd')); ?>">Ajout de grades</a></li>
								<li class=""><a href="<?php echo $this->Html->url(array('controller' => 'Ranks', 'action' => 'RankList')); ?>">Liste des grades</a></li>
							</ul>
						</li>
					   </ul>
				</li>
				<li class="dropdown dd-1">
					<a href="" data-toggle="dropdown" class="glyphicons user"><i></i>Gestion des utilisateurs<span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li><a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'UserAdd'));?>" class="glyphicons history"><i></i>Incrist un utilisateurs</a></li>
						<li><a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'UserList'));?>" class="glyphicons group"><i></i>Lister les utilisateurs</a></li>
					 </ul>
				</li>
				<li class="dropdown dd-1">
					<a href="" data-toggle="dropdown" class="glyphicons charts"><i></i>Gestion des Fonds<span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li><a href="<?php echo $this->Html->url(array('controller'=>'Funds','action'=>'FundAdd'));?>" class="glyphicons history"><i></i>Create Funds</a></li>
						<li><a href="<?php echo $this->Html->url(array('controller'=>'Funds','action'=>'FundList'));?>" class="glyphicons history"><i></i>List Funds</a></li>
						<li><a href="<?php echo $this->Html->url(array('controller'=>'Values','action'=>'ValueAdd'));?>" class="glyphicons group"><i></i>Add asset values</a></li>
					 </ul>
				</li>
			</ul>
			<!-- // Full Top Style END -->

			<!-- // Not Blank Page END -->

			<!-- Top Menu Right -->

			<ul class="topnav pull-right hidden-phone">
			    <!-- Themer -->
				 <li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
				<!-- // Themer END -->

				<!-- Language menu -->
				<li class="hidden-phone dropdown dd-1 dd-flags" id="lang_nav">
					<a href="#" data-toggle="dropdown">
						<?php echo $this->Html->image('lang/fr.png',array('alt'=>'en')); ?>
					</a>
			    	<ul class="dropdown-menu pull-right">
			      		<li class="active"><a href="#" title="English"><?php echo $this->Html->image('lang/en.png',array('alt'=>'English')); ?> English</a></li>
			      		<li><a href="#" title="Romanian"><?php echo $this->Html->image('lang/ro.png',array('alt'=>'Romanian')); ?> Romanian</a></li>
			      		<li><a href="#" title="Italian"><?php echo $this->Html->image('lang/it.png',array('alt'=>'Italian')); ?> Italian</a></li>
			    	</ul>
				</li>
				<!-- // Language menu END -->

				<!-- Profile / Logout menu -->
				<li class="account dropdown dd-1">
					<a data-toggle="dropdown" href="#" class="glyphicons logout lock">
					  <span class="hidden-tablet hidden-phone hidden-desktop-1">mosaicpro</span><i></i>
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="#" class="glyphicons cogwheel">Settings<i></i>
						    </a>
					    </li>
						<li>
							<a href="#" class="glyphicons camera">My Photos<i></i>
							</a>
						</li>
						<li class="profile">
							<span>
								<span class="heading">Profile <a href="#" class="pull-right text-weight-regular">edit</a>
								</span>
								<a href="#" class="img thumb">
									<img data-src="holder.js/51x51/dark" alt="Avatar" />
								</a>
								<span class="details">
									<a href="#">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="<?php echo $this->Html->url(array('Users','action'=>'logout')); ?>">Déconnexion</a>
							</span>
						</li>
					</ul>
				</li>
				<!-- // Profile / Logout menu END -->
			</ul>
			<!-- // Top Menu Right END -->

			<ul class="topnav pull-right hidden-phone">
				<li>
					<a href="" class="glyphicons envelope single-icon"><i></i><span class="badge fix badge-primary"></span>
					</a>
				</li>
				<li>
				    <a href="" class="glyphicons cup single-icon"><i></i><span class="badge fix badge-primary"></span>
				    </a>
				</li>
				<li class="hidden-tablet">
					<a href="" class="glyphicons comments single-icon"><i></i><span class="badge fix badge-primary"></span>
					</a>
				</li>
			</ul>
			<div class="clearfix"></div>
			
		   </div>
		   <!-- Top navbar END -->

            <?php echo $this->fetch('head'); ?>

		    <!--<div class="row-fluid">-->

             <?php echo $this->fetch('content'); ?>

		    <!--</div>-->
        </div>
	    <!-- // Content END -->
    </div>	
	<div class="clearfix"></div>
	<!-- // Sidebar menu & content wrapper END -->
				
	<div id="footer" class="hidden-print">
	   <!--  Copyright Line -->
		<div class="copy">&copy; 2012 - <?php echo date('Y'); ?> - 
			<a href="http://www.eic-corporation.com" target="_blank">EiC-Corporation</a> - All Rights Reserved. 
			<a href="http://www.platform.eic-corporation.com" target="_blank">PLatform EiC, 
				connecté depuis <?php echo $_SERVER['REMOTE_ADDR']; ?>
			</a> - Current version: v1.0 Bêta <a target="_blank" href="help.eic-corporation.com">Support d'aide.</a>
	    </div>
	   <!--  End Copyright Line -->
	</div>
	<!-- // Footer END -->

  </div>
	<!-- // Main Container Fluid END -->


		<!-- Themer -->
		<div id="themer" class="collapse">
			<div class="wrapper">
				<span class="close2">&times; close</span>
				<h4>Themer <span>color options</span></h4>
				<ul>
					<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
					<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
					<li>
						<span class="link" id="themer-custom-reset">reset theme</span>
						<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
					</li>
				</ul>
				<div id="themer-getcode" class="hide">
					<hr class="separator" />
					<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
					<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- // Themer END -->

		<!-- Modal Gallery -->
		<div id="modal-gallery" class="modal modal-gallery hide fade hidden-print" tabindex="-1">
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">&times;</a>
		        <h3 class="modal-title"></h3>
		    </div>
		    <div class="modal-body"><div class="modal-image"></div></div>
		    <div class="modal-footer">
		        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
		        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
		        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
		        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
		    </div>
		</div>
		<!-- // Modal Gallery END -->
	
	<!-- jQuery Event Move -->
    <?php echo $this->Html->script('common/theme/scripts/plugins/system/jquery.event.move/js/jquery.event.move'); ?>
	
	<!-- jQuery Event Swipe -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/system/jquery.event.swipe/js/jquery.event.swipe'); ?>	
	<!-- jQuery ScrollTo Plugin -->
	<!--[if gt IE 8]><!--><script src='http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js'></script><!--<![endif]-->
	
	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src='http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js'></script><!--<![endif]-->
	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!-->
	<?php echo $this->Html->script('common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5'); ?><!--<![endif]-->
	<!-- Code Beautify -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/other/js-beautify/beautify'); ?>
	<?php echo $this->Html->script('common/theme/scripts/plugins/other/js-beautify/beautify-html'); ?>	
	<!-- PrettyPhoto -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto'); ?>	
	<!-- JQueryUI -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min'); ?>	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min'); ?>		
	
	<!-- Modernizr -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/system/modernizr'); ?>	
	<!-- Bootstrap -->
	<?php echo $this->Html->script('common/bootstrap/js/bootstrap.min') ?>
	
	<!-- SlimScroll Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll'); ?>	
	<!-- Holder Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/other/holder/holder.js?1374506511'); ?>

	<!-- Uniform Forms Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min'); ?>	
	<!-- MegaMenu -->

	<!-- Bootstrap Extended -->
	<?php echo $this->Html->script('common/bootstrap/extend/bootstrap-select/bootstrap-select'); ?>
	<?php echo $this->Html->script('common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons'); ?>
	<?php echo $this->Html->script('common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload'); ?>
	<?php echo $this->Html->script('common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min'); ?>
	<?php echo $this->Html->script('common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2'); ?>
	
	<!-- Google Code Prettify -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/other/google-code-prettify/prettify'); ?>
	
	<!-- Gritter Notifications Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min'); ?>
	
	<!-- Notyfy Notifications Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy'); ?>
	
	<!-- MiniColors Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors'); ?>	
	<!-- DateTimePicker Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min'); ?>

	<!-- Cookie Plugin -->
    <?php echo $this->Html->script('common/theme/scripts/plugins/system/jquery.cookie'); ?>
	
	<!-- Select2 Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/forms/select2/select2'); ?>
	
	<!-- Themer -->
	<?php echo $this->Html->script('common/theme/scripts/demo/themer'); ?>	
	<!-- Easy-pie Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart'); ?>		
	
	<!-- Sparkline Charts Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min'); ?>			
	<!-- Ba-Resize Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/other/jquery.ba-resize'); ?>	
	
	<!-- DataTables Tables Plugin -->
	<?php echo $this->Html->script('common/theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min'); ?>	
	<?php echo $this->Html->script('common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/js/ColVis.min'); ?>	
	<?php echo $this->Html->script('common/theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap'); ?>	
     <!-- Tables Demo Script -->
	<?php echo $this->Html->script('main'); ?>	

	<!--  Flot Charts Plugin -->
	<?php /*echo $this->Html->script('common/theme/scripts/plugins/charts/flot/jquery.flot'); ?>
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/flot/jquery.flot.pie'); ?>
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/flot/jquery.flot.tooltip'); ?>
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/flot/jquery.flot.selection'); ?>
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/flot/jquery.flot.resize'); ?>
	<?php echo $this->Html->script('common/theme/scripts/plugins/charts/flot/jquery.flot.orderBars');*/ ?>
	
	<!-- Charts Helper Demo Script -->
	<?php //echo $this->Html->script('common/theme/scripts/demo/charts.helper.js?1374506511'); ?>	
	<!-- Bootstrap Image Gallery -->
    <?php echo $this->Html->script('common/theme/scripts/plugins/gallery/load-image/js/load-image.min'); ?>
    <?php echo $this->Html->script('common/bootstrap/extend/bootstrap-image-gallery/js/bootstrap-image-gallery.min'); ?>

	<!-- Dashboard Demo Script -->
	<?php echo $this->Html->script('common/theme/scripts/demo/index.js?1374506511'); ?>	
	<!-- Common Demo Script -->
	<?php echo $this->Html->script('common/theme/scripts/demo/common.js?1374506511'); ?>

	<?php echo $this->fetch('script'); ?>
</body>
</html>