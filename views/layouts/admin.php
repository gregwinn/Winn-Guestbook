<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Make IE8 behave like IE7, necessary for charts -->
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		
		<title>Admin Control Panel</title>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		
		<!-- IE specific CSS stylesheet -->
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" />
		<![endif]-->
		
		<!-- JavaScript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>

	<body>
	

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a href="/guestbook.php?url=admin" class="brand">Winn Guestbook</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="guestbook.php?url=admin" <?php $_GET['url'] == 'admin' ? print "class='active'" : print ''; ?>>
								Dashboard
							</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Content <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="guestbook.php?url=admin/active">Active Posts</a></li>
									<li><a href="guestbook.php?url=admin/arcives">Archives</a></li>
									<li><a href="guestbook.php?url=admin/postcontent">Post</a></li>
								</ul>
							</li>
							<li><a href="guestbook.php?url=admin/stats">Stats</a></li>
							<li><a href="#">Settings</a></li>
						</ul>

						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->User['username']; ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="?url=admin/settings"><i class="icon-pencil"></i> Account Settings</a></li>
									<li><a href="<?php echo GBURL; ?>"><i class="icon-share"></i> View Website</a></li>
									<li class="divider"></li>
									<li><a href="?url=admin/logout"><i class="icon-off"></i> logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			
			<div id="header">
				<h1 id="logo">Admin Control Panel </h1>
				
				<div id="header_buttons">
					
					<a href="#modal" rel="modal"><img src="images/icons/envelope.png" alt="3 Messages" /><?php echo $newposts['datacount']; ?></a>
					<a href="#modal2" rel="modal">modal box test</a>
					<a href="<?php echo GBURL; ?>">view website</a>
					<a href="?url=admin/logout">logout</a>
					
				</div><!-- end #header_buttons -->
				
			</div><!-- end #header -->
			
			<div class="row">
				<div class="span12">
			
					<?php echo $content; ?>
					
				</div><!-- end #content -->
			</div>
			
		</div>

		
		<div class="container">

			&copy; Copyright <?php echo date("Y"); ?> Winn Guestbook (<?php echo LONG_VERSION_NUMBER ?>), a product of <a href="http://winn.ws">Winn.ws</a>. Need support? Contact me on the <a href="http://code.google.com/p/winn-guestbook/">project page</a>.
		</div><!-- end #footer -->

	</div></body>
</html>