<!DOCTYPE html>
<html>
<head>
	<title>GAMER</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/skeleton.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
       session_start();
       $usuario=$_SESSION['nom'];
       if(!isset($usuario)){
          header('location:../html/login.html');
       }else{
       	echo '<br>';
       echo "<font color='white'><label> Bienvenid@ $usuario </label></font>";
       }
       
	?>
   <header class="header">
      <div class="container">
         <div class="row">
            
            <div class="four columns">
               <h1>Gamer</h1>
            </div>
            <a href="cerrar.php">Cerrar Sesión</a>
            <div class="two columns u-pull-right">
               <ul>
                  <li class="submenu">
                     <img src="img/cart.png">
                     <div id="carrito">
                        <p class="vacio">carrito vacio</p>
                        <table id="lista-carrito" class="u-full-width">
                           <thead>
                              <tr>
                                 <th>Imagen</th>
                                 <th>Productos</th>
                                 <th>Precio</th>
                              </tr>
                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table>
                        <a href="#" id="vaciar-carrito" class="button u-full-width">vaciar carrito</a>
                     </div>   
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </header>

   <div class="hero">
      <div class="container">
         <div class="row">
            <div class="six columns">
               <div class="contenido-hero">
                  <h2>Realiza un pedido</h2>
                  <p>Todos los pedidos con descuento</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="barra">
      <div class="container">
         <div class="row">
            <div class="four columns icono icono1">
               <p>100 productos diferentes<br>
               Explora los nuevos productos</p>
            </div>
            <div class="four columns icono icono2">
               <p>Expertos<br>
               Prueba las nuevas combinaciones</p>
            </div>
            <div class="four columns icono icono3">
               <p>Envio<br>
               Gratis hasta tu casa</p>
            </div>
         </div>
      </div>
   </div>

   <div id="lista-catalogo" class="container">
      <h1 class="encabezado">Pedidos en linea</h1>
      <div class="row">
         <div class="four columns">
            <div class="card">
               <img src="img/product1.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Sencilla</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product2.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Media</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product3.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Alta</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar al carrito</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="four columns">
            <div class="card">
               <img src="img/product4.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Sencilla</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product5.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Media</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product1.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Alta</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar al carrito</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="four columns">
            <div class="card">
               <img src="img/product2.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Sencilla</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product3.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Media</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product4.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Alta</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar al carrito</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="four columns">
            <div class="card">
               <img src="img/product5.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Sencilla</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product2.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Media</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar al carrito</a>
               </div>
            </div>
         </div>
         <div class="four columns">
            <div class="card">
               <img src="img/product3.jpg" class="u-full-width">
               <div class="info-card">
                  <h4>Pc Gamer Alta</h4>
                  <p>Envio Gratis</p>
                  <img src="img/estrellas.png">
                  <p class="precio">$50<span class="u-pull-right">$15</span></p>
                  <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar al carrito</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <footer class="footer">
      <div class="container">
         <div class="row">
            <div class="four columns">
               <nav class="menu">
                  <a class="enlace" href="#">Pedidos a domicilio</a>
                  <a class="enlace" href="#">Componentes</a>
               </nav>
            </div>
            <div class="four columns">
               <nav class="menu">
                  <a class="enlace" href="#">Ubicacion</a>
                  <a class="enlace" href="#">Telefono</a>
               </nav>
            </div>
         </div>
      </div>
   </footer>

   <script type="text/javascript" src="../JS/app.js"></script>

</body>
</html>