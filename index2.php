<?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--<body onLoad="alert('BIENVENIDO A SPACEGAMES');" onUnLoad="confirm('Gracias por visitarnos! Seguro si tenemos lo que buscas);">-->
	<title>Spacegames</title> <!-- Titulo De la pagina web -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans&display=swap" rel="stylesheet"> <!-- Link para vincular la fuente de letra de google -->
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- Link para usar classes y cosas del servidor y pagina de bootstrap version 4.3.1 -->
	<link rel="stylesheet" href="css/estilo.css"> <!-- Link para vincular este html con un css para darle estilo -->
	<link rel="stylesheet" href="css/estilovoltear.css">
	<link rel="icon" href="imgpri/LogoSpaces.ico">
	<link rel="stylesheet" href="css/estiloredessociales.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
	<body>
	<header>
		<nav id="barra"><!-- Con un id para darle un estilo de barra -->
	<nav class="navbar"> <!-- Barra de opciones  -->
		 <a href="Nosotros.html #Logosos" class="navbar-brand"><img src="imgpri/LogoSpaces.png" width="80px"><img align="end" src="imgpri/Carrito.png" width="60px"></a> <!-- Logo y carrito de compras con un link para ir a ver nuestro logo más grande y más sobre nosotros -->
		 	<ul class="nav"> <!-- Lista no ordenada -->
     		 <li class="nav-item active"> <!-- Elemento de la lista -->
        	<a class="nav-link" href="index2.php">Inicio</a> <!-- Elemento de la lista con un link a otras pestañas correspondiendo su nombre -->
     		 </li>
     		 <li class="nav-item">
       		 <a class="nav-link" href="Videojuegos.html">Videojuegos</a>
      		</li>
      		<li class="nav-item">
       		 <a class="nav-link" href="Ofertas.html">Ofertas</a>
     	    </li>
      		<li class="nav-item">
       		 <a class="nav-link" href="Nosotros.html">Nosotros</a>
     	    </li>
     	 	<li class="	nav-item">
     		  <a class="nav-link" href="Novedades.html">Novedades</a>	
     	    </li>
    	</ul>
    	</nav>
	</nav>	
		<div class="cover d-flex justify-content-center align-items-center flex-column">
			<h1><!-- Titulo Grande y Principal -->
				SPACEGAMES
			</h1>
			<p> <!-- Parrafo -->
				Al comprar un juego creas un mundo de posibles aventuras
			</p>
			<div class="p-0">
				<a href="Videojuegos.html"><button class="btn btn-outline-primary"> <!-- Boton con un estilo y con un link que nos lleva a la pestaña de Videojuegos -->
					Ver Productos
				</button></a> 

				
					<a href="http://localhost/BaseD/index.php"><button class="btn btn-outline-success"><!-- Boton con un estilo y con un link a otra pestaña para Registrarte -->
					Iniciar Sesión
				</button></a>
				 <a href="logout.php" class="btn btn-outline-danger"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a>
				</div>
		</div>
			
		</header>

		<section>
			
		</section>
		<section>
			<div class="container mt-5 mb-5">
				<div class="row justify-content-center"> <!-- class para justificar el contenido centrado -->
					<div class="col"  class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2"><!-- Responsividad depediendo cuantas columnas se van a usar dependiendo el tamaño del dispositivo -->
							<div class="card">
  								<div title="Juegos de Xbox" class="cover cover-small" style="background-image: url(imgpri/XB.png);">
  								 </div>
  									<div class="card-body"><!-- Imagen y una class para centrar y respetar el tamaño de la tarjeta -->
    									<h5 class="card-title">CONSIGUE 3 MESES POR $10</h5>
    				<p class="card-text">Disfruta de cientos de juegos de alta calidad en consola, PC o la nube. Y, además, EA Play.</p>
    							<a href="Novedades.html" class="btn btn-outline-primary">Más Novedades</a> <!-- Botton con un estilo y un link/enlace que nos lleva a la pagina de Novedades -->
					</div>
  				</div>
  			</div>
  					<div class="col" class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2"> <!-- Responsividad depediendo cuantas columnas se van a usar dependiendo el tamaño del dispositivo -->
  				<div class="card">
  								<div title="Juegos de playstation"class="cover cover-small" style="background-image: url(imgpri/Plays.png);">
  								 </div>
  									<div class="card-body"><!-- Imagen y una class para centrar y respetar el tamaño de la tarjeta -->
    									<h5 class="card-title">ESTE MES EN PLAYSTATION</h5>
    				<p class="card-text">Mira los lanzamientos más importantes de este mes junto a artículos dedicados, guías y más.</p>
    							<a href="Novedades.html" class="btn btn-outline-primary">Más Novedades</a> <!-- Botton con un estilo y un link/enlace que nos lleva a la pagina de Novedades -->
						</div>
  					</div>
  				</div>

						<div class="col" class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2"> <!-- Responsividad depediendo cuantas columnas se van a usar dependiendo el tamaño del dispositivo -->
  				<div class="card">
  								<div class="cover cover-small" style="background-image: url(imgpri/Nintendo.png);"> <!-- Imagen y una class para centrar y respetar el tamaño de la tarjeta -->
  								 </div>
  									<div class="card-body"> <!-- Class para dar un formato de card/tarjeta -->
    									<h5 class="card-title">¡NINTENDO SWIRCH ONLINE!</h5> <!-- Titulos más pequeños -->
    				<p class="card-text">Te presentamos una nueva su scripción a Nintendo Switch Online con beneficios adicionales, incluyendo juegos de Nintendo 64™.</p> <!-- Es un parrafo con un estilo de card text que es como una tarjetita -->
    							<a href="Novedades.html" class="btn btn-outline-primary">Más Novedades</a> <!-- Botton con un estilo y un link/enlace que nos lleva a la pagina de Novedades -->
						</div>
  					</div>
  				</div>
  			</div>

		</div>
		</section>
		<section>
			<div class="container mt-5 mb-5">
				<div class="row"> <!-- Class para centrar -->
					
						<img class="col-12 col-sm-12 col-lg-12" src="imgpri/Registrar6.png" alt="Personajes de Minecratf con dispositivos electrónico"/><br> <!-- Es una imagen con un salto de linea -->
					
					
					<div class="Enfa" class="col-12 col-sm-6" style="background:white;"> <!-- tiene un color blanco -->
						<p class="text-center"><br> <!-- El parrafo tiene un salto de linea y una clase para ser centrado -->
							<h3>INICIA CONSTRUYENDO TU MUNDO DE FANTASÍA</h3> <!-- Es un subtitulo -->
						</p>
						
					</div>
					<p class="Enfa" class="text-center"> <!-- Este parrafo tiene una clase para ser centrado -->
							!Compra los videojuegos con que sueñas jugar y experimenta este nuevo mundo¡<br>
						</p><br>

				</div>
				
				<section>
					<!-- Tira de Productos -->
						<div class="container mt-5 mb-5">
							<div class="product-stripe">
								<div class="stripe-container">
									<div class="card p-4"> <!-- Darle un estilo de card/tarjeta con espacio de 4 para los productos -->
  								<div title="Juegos de the last of us"  
  								class="cover cover-small" 
  								style="background-image: url(imgpri/Thelast.jpg);"> <!-- Imagen del producto usado como fondo -->
  								 </div>
  									<div class="card-body"> <!-- Class para usar card/tarjeta -->
    									<h5 class="card-title">The Last Of Us</h5> <!-- Titulo del producto -->
    										<span class="badge badge-info">$1,799 .99</span><!-- Es una pequeña etiqueta y la use para mostrar el precio -->
    										<span class="badge badge-info">PS5</span><!-- Para mostrar su categoria -->

					</div>
  				</div>
  				<div class="card p-4">
  								<div title="Control de PS5 rosa" class="cover cover-small" style="background-image: url(imgpri/Ps4Dual.jpg);">
  								 </div>
  									<div class="card-body">
    									<h5 class="card-title">Control Playstation 5 Nova Pink</h5>
    										<span class="badge badge-info">$1,699 .99</span>
    										<span class="badge badge-info">PS5</span>
    							
					</div>
  				</div>
  				<div class="card p-4">
  								<div title="Halo Infinite" class="cover cover-small" style="background-image: url(imgpri/Halo.jpg);">
  								 </div>
  									<div class="card-body">
    									<h5 class="card-title">Halo Infinite</h5>
    										<span class="badge badge-info">$1,499 .99</span>
    										<span class="badge badge-info">Xbox</span>		
					</div>
  				</div>
  				<div class="card p-4">
  								<div title="Control de Xbox rojo" class="cover cover-small" style="background-image: url(imgpri/Xboxdual.jpg);">
  								 </div>
  									<div class="card-body">
    									<h5 class="card-title">Control Xbox One Series X Red</h5>
    									<span class="badge badge-info">$1,799 .99</span>
    									<span class="badge badge-info">Xbox</span>
    							
					</div>
  				</div>
  				
  				<div class="card p-4">
  								<div title="Halo Infinite" class="cover cover-small" style="background-image: url(imgpri/MarioOdy.jpg);">
  								 </div>
  									<div class="card-body">
    									<h5 class="card-title">Mario Odyssey</h5>
    										<span class="badge badge-info">$1,499 .99</span>
    										<span class="badge badge-info">Nintendo</span>		
						</div>
  					</div>
  				</div>

									
								</div>
							</div>

						</div>
			
				</section>
						<section>
							<div class="container mt-5 mb-5" id="Mapa"> <!-- Es la divicion dode esta el mapa y aqui nos traera el link de m'as arriba -->
								<h4><!-- Titulo -->
									Aquí nos vemos Gamer:
								</h4>
									<p>Rancho Nuevo, Av. de las Americas, San Luis Potosi</p> <!-- Parrafo con info de la localidad -->
										<div class="responsive-iframe"> <!-- Una division con un iframe que nos lleva a un link del mapa de nuestra ubicacion y nos muestra un pequeño mapa que podemos interactuar con el -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8784.813429354102!2d-100.92598798221829!3d22.218857455663162!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aa1955610cd69%3A0xad63c85c0cedf28d!2sUniversidad%20Tecnol%C3%B3gica%20de%20San%20Luis%20Potos%C3%AD%20(UTSLP)!5e0!3m2!1ses-419!2sus!4v1655877864841!5m2!1ses-419!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
							</div>
						</section>

						<section>
							<footer class=" <!-- Es un footer para Los derechos de la pagina hasta el final de la pestaña -->
    background-size: cover;
    background-position: center;
    background-color: rgba(0, 0, 0, 0.2);
    background-blend-mode: darken; p-3 mt-5">
        <p class="text-center m-0 text-muted">Sitio Oficial de Spacegames</p>
    </footer>
						</section>
	

	<body>
		<style>
			body::-webkit-scrollbar{
	width: 10px;
	background: #FFF;
	}
	body::-webkit-scrollbar-thumb{
	background: #1BCBF2;
	border-radius: 10px;
	}
		</style>
	</body>

	   <main>
       <div class="icon">
            <a href="https://www.instagram.com/alain_torres_florres/"> <svg heigth="80" width="80"> 
                <circle cx="40" cy="40" r=35 stroke="white" stroke-width="4" fill="none" ></circle>
            </svg> </a>
            <i class='bx bxl-instagram'></i>
        </div>

        <div class="icon">
            <svg heigth="80" width="80"><a href="https://www.facebook.com/sly.cooper.33483/">
                <circle cx="40" cy="40" r=35 stroke="white" stroke-width="4" fill="none" ></circle>
            </svg></a>
            <i class='bx bxl-facebook-circle'></i>
        </div>

       <div class="icon">
             <a href="https://www.youtube.com/channel/UCMyHoB41vcn-uH5Ps4t5B_g"><svg heigth="80" width="80">
                <circle cx="40" cy="40" r=35 stroke="white" stroke-width="4" fill="none" ></circle>
            </svg></a>
            <i class='bx bxl-youtube' ></i>
        </div>

      <div class="icon">
              <a href="https://twitter.com/EldiosHades4?t=PmJYQugWDQabNmSPfTq_lg&s=08"><svg heigth="80" width="80">
                <circle cx="40" cy="40" r=35 stroke="white" stroke-width="4" fill="none" ></circle>
            </svg></a>
        
            <i class='bx bxl-twitter' ></i>
        </div>
    </main>

	</body>
</html>