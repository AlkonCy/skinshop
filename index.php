<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Skin Shop - Negocio Seguro</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	 <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<!-- https://material.io/resources/icons/?style=baseline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=outline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=round -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=sharp -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=twotone -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
      rel="stylesheet">
    
</head>

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" width="70" height="70" alt="" /></a>
						</div>
						<div class="search_box pull-right">
							<input type="text" placeholder="¿Que buscaras hoy?"/>
						</div>
					

						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/vendedor"><i class="fa fa-user"></i> Vendedor</a></li>
						<li><a href="#"><i class="fa fa-shopping-cart" id="btnCarrito"></i>Carrito <span class="badge bg-success" id="carrito">0</span></a></li>
							
								<li><a href="login.php"><i class="fa fa-lock"></i> Iniciar Seccion</a></li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									COLOMBIA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href=""> Estados Unidos</a></li>
									<li><a href=""> España</a></li>
								</ul>
							</div>

							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									COL-PESO
									<span class="caret"></span>
								</button>
								
								<ul class="dropdown-menu">
									<li><a href=""> USD-Dolar</a></li>
									<li><a href="">EUR-EURO</a></li>
								</ul>
							</div>
						</div>
		<!--/header-middle-->
	<div class="col-sm-3">
						
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active"></a></li>
								<li class="dropdown"><a href="/index.php">Tienda<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/404.php">Informacion</a></li>
										<li><a href="/404.php">¿Como Comprar?</a></li> 
										<li><a href="/404.phpl">¿Quienes Somos?</a></li> 
										<li><a href="/404.php">¿Preguntas Frecuentes?</a></li> 
										<li><a href="/404.php">¿Como afiliarme?</a></li>
										<li><a href="/login.php">Informacion</a></li>	
										<li><a href="/admin">admin</a></li>											
                                    </ul>
                                </li> 
                                    <ul role="menu" class="sub-menu">
                                    </ul>
                                </li> 
								<li><a href="/404.php">Skin Cloud</a></li>
								<li class="dropdown"><a href="#">Skins +<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/404.php">Peliculas</a></li>
										<li><a href="/404.php">Series</a></li>
							
								<li></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
	
    
    <!-- Navigation-->
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Skin</span>Shop</h1>
									<h2>Web de comercio electronico</h2>
									<p>Bienvenido a nuestra tienda, contamos con excelente personal y excelente ventas a nivel nacional envios a toda colombia. </p>
									<button type="button" class="btn btn-default get">Informacion</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
							
								</div>
							</div>
							
						</div>
						
						
					
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
    
    <!-- Header-->
   
   	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						
						<!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Categorias</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									
									<li><a href="#"> <span class="material-icons"class="pull-right"></span><?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?></a></li>
									
								</ul>
							</div>
						</div>
						
						<div class="price-range">
							<h2>Rango de precio</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="3500000" data-slider-step="5" data-slider-value="[0,50]" id="sl2" ><br />
								 <b class="pull-left">$ 100.000</b> <b class="pull-right">$ 3.500.000</b>
							</div>
						</div>
						<div class="shipping text-center">
							<img src="images/home/shipping.jpg" width="100" height="100" alt="" />
						</div>
					
					</div>
				</div>
				
				
			
        <div class="col-sm-9 padding-right">
		<h2 class="title text-center">Tienda</h2>
            <div class="features_items">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col-sm-4" category="<?php echo $data['categoria']; ?>">
                            <div class="productinfo text-center">
                            
                                <div class="new" src="./images/home/new.png"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                           
                                <img class="productinfo text-center" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
               
                                <div class="card-body p-4">
                                    <div class="text-center">
									<h3 class="fw-bolder"><?php echo $data['nombre'] ?></h3>
									<p><?php echo $data['descripcion']; ?></p>
									<p>Antes</p>
									<span class="overlay-content"><?php echo $data['precio_normal'] ?></span>
									<p>Ahora</p>
                                       <h2><?php echo $data['precio_rebajado'] ?></h2>
                                    </div>
                                </div>
                       
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-default add-to-cart" data-id="<?php echo $data['id']; ?>" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
			</div>
		</div>
	</section>
	
			<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Skin</span>Shop</h2>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>
		
		
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 Skin Shop todos los derechos reservados</p>
					<p class="pull-right">Programado <span><a target="_blank" href="/comundad.php">Andres Martinez</a></span></p>
				</div>
			</div>
		
		
	</footer>			
    <!-- Footer-->
   
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
	 <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>