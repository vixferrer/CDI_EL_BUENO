﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Populares</title>
    <link rel="shortcut icon" href="../assets/images/logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="BarraPopu/style.css">
    <link rel="stylesheet" href="cssPopu/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <script src="jsPopu/jquery-3.2.1.js"></script>
    <script src="jsPopu/script.js"></script>
</head>
<body>
	
	<!-- BARRA DENAVEGACIÓN -->
	<header>
            <div class="container">
               <nav>
                <ul>
				  <li><a href="../index.php"><img src = "BarraPopu/Iconos/LOGO.png" class="logo"></a></li>
                  <li><a href="Camisa/Camisa.php">Camisas<img src = "BarraPopu/Iconos/camisa.png" 
					onmouseover="src='BarraPopu/Iconos/camisa2.png'" 
					onmouseout="src='BarraPopu/Iconos/camisa.png'" 
                      class="iconos"></a></li>
                  <li><a href="Pantalon/Pantalon.php">Pantalones <img src = "BarraPopu/Iconos/pantalon.png" 
                      onmouseover="src='BarraPopu/Iconos/pantalon2.png'" 
                      onmouseout="src='BarraPopu/Iconos/pantalon.png'" 
                      class="iconos"></a></li>
                  <li><a href="Abrigo/Abrigo.php">Abrigos<img src = "BarraPopu/Iconos/abrigo.png" 
                      onmouseover="src='BarraPopu/Iconos/abrigo2.png'" 
                      onmouseout="src='BarraPopu/Iconos/abrigo.png'" 
                      class="iconos"></a></li>
                  <li><a href="Jersey/Jersey.php">Jerseys<img src = "BarraPopu/Iconos/jersey.png" 
                      onmouseover="src='BarraPopu/Iconos/jersey2.png'" 
                      onmouseout="src='BarraPopu/Iconos/jersey.png'"
                      class="iconos"></a></li>
                  <li><a href="Falda/Falda.php">Faldas<img src = "BarraPopu/Iconos/falda.png" 
                      onmouseover="src='BarraPopu/Iconos/falda2.png'" 
                      onmouseout="src='BarraPopu/Iconos/falda.png'"
                      class="iconos"></a></li>
                  <li><a href="Calzado/Calzado.php">Calzado<img src = "BarraPopu/Iconos/calzado.png" 
                      onmouseover="src='BarraPopu/Iconos/calzado2.png'" 
                      onmouseout="src='BarraPopu/Iconos/calzado.png'"
                      class="iconos"></a></li>
                  <li><a href="Ofertas/Ofertas.php">Ofertas<img src = "BarraPopu/Iconos/ofertas.png"
                      onmouseover="src='BarraPopu/Iconos/ofertas2.png'" 
                      onmouseout="src='BarraPopu/Iconos/ofertas.png'"
					  class="iconos"></a></li>  
			
					  <a href=# class="finalizar">Finalizar Selección
						<img src = "BarraPopu/Iconos/probador.png" 
						  onmouseover="src='BarraPopu/Iconos/probador2.png'" 
						  onmouseout="src='BarraPopu/Iconos/probador.png'"
						  class="iconos"></a>
				</ul>			
              </nav>
            </div>
		</header>
		
		<!--PRODUCTOS  -->

	<div class="wrap">
		<div class="store-wrapper">
				<section class="products-list">
				<div class="product-item">
					<img src="FotosPopu/camisetaMarvel.jpg" alt="" >
					<a class= "nombreElemento" href="#">Camiseta Marvel</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/camisetaMarvel.php">+ Ver detalles</a>
						<span class="precio">9.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosPopu/bermudaVerde.jpg" alt="" >
					<a class= "nombreElemento" href="#">Bermuda Verde</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/bermuda.php">+ Ver detalles</a>
						<span class="precio">14.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosPopu/camisetaAzul.jpg" alt="" >
					<a class= "nombreElemento" href="#">Camiseta Azul</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/camisetaAzul.php">+ Ver detalles</a>
						<span class="precio">6.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosPopu/camisetaBlanquiAzul.jpg" alt="" >
					<a class= "nombreElemento" href="#">Top Azul</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/topAzul.php">+ Ver detalles</a>
						<span class="precio">8.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosPopu/camisetaFlorida.jpg" alt="" >
					<a class= "nombreElemento" href="#">Camiseta Flores</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/camisetaFlorida.php">+ Ver detalles</a>
						<span class="precio">7.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosPopu/sandaliasPlaya.jpg" alt="" >
					<a class= "nombreElemento" href="#">Sandalias Playa</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/sandalias.php">+ Ver detalles</a>
						<span class="precio">12.99 €</span>
						</nav>
				</div>
			</section>
		</div>
	</div>

</body>
</html>