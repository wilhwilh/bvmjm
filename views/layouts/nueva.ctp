<!DOCTYPE html>
<html lang="es">
<head>
  <?php echo $this->Html->charset(); ?>
  <title>Biblioteca Virtual Musicológica Juan Meserón</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<?php echo $this->Html->css('nuevo/bootstrap.min'); ?>
	<?php echo $this->Html->css('nuevo/style'); ?>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png"> -->
  <!--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png"> -->
  <!--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png"> -->
  <!--<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png"> -->
  
  <link rel="shortcut icon" href="img/nuevo/favicon.ico">
  
	<?php echo $this->Html->script('nuevo/jquery.min'); ?>
	<?php echo $this->Html->script('nuevo/bootstrap.min'); ?>
	<?php echo $this->Html->script('nuevo/scripts'); ?>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 </button>
					 
					 <a class="navbar-brand" href="#">
						BVMJM
					 </a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Inicio</a>
						</li>
						<li>
							<?php echo $this->Html->link('Quiénes Somos', '/pagetexts/page/1'); ?>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Módulos<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Libros', '/books'); ?>
								</li>
								<li>
									<?php echo $this->Html->link('Hemerografía', '/books'); ?>
								</li>
								<li>
									<?php echo $this->Html->link('Música Manuscrita', '/books'); ?>
								</li>
								<li>
									<?php echo $this->Html->link('Música Impresa', '/books'); ?>
								</li>
								<li>
									<?php echo $this->Html->link('Iconografía', '/books'); ?>
								</li>
								<li>
									<?php echo $this->Html->link('Trabajos Académicos', '/books'); ?>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Buscar</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<?php echo $this->Html->link('Mi Biblioteca', '/user_items'); ?>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario - Ingresar &nbsp;<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Mi Perfil</a>
								</li>
								<!--
								<li>
									<a href="#">Something else here</a>
								</li>
								-->
								<li class="divider">
								</li>
								<li>
									<a href="#">Salir</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			
			<div>
				<?php echo $this->Html->image('nuevo/logo_meseron.jpg', array('style' => 'width: 30%; height: 160px; float: left;')); ?>
				<?php echo $this->Html->image('nuevo/imagen_up.jpg', array('style' => 'width: 70%; height: 160px; float: left;')); ?>
			</div>
			
			<!--
			<div class="carousel slide" id="carousel-850204">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-850204">
					</li>
					<li data-slide-to="1" data-target="#carousel-850204">
					</li>
					<li data-slide-to="2" data-target="#carousel-850204">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="/">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="/">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="/">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-850204" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-850204" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			-->
			
		</div>
	</div>
	
	<div class="row clearfix">
		<?php echo $content_for_layout; ?>
	</div>
	
	<br />
	
	<div class="row clearfix">
		<div class="col-md-12 column text-center">
			<ul class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Library</a>
				</li>
				<li class="active">
					Data
				</li>
			</ul>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column text-center">
			<?php echo $this->Html->image('nuevo/index_final.jpg', array('class' => 'img-rounded')); ?>
		</div>
	</div>
</div>
</body>
</html>
