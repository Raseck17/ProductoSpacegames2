<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:index2.php');
	}
?>

<?php include('header.php'); ?>

<body>
    <link rel="icon" href="imgpri/LogoSpaces.ico">
 <style>
     body{
        height: 100%;
        background-image: url(css/Fondos/F6.jpg);
        background-size: cover;
     }

     .panel-primary>.panel-heading {
        background-color: #F1A2F2;
        border-color: #F057F2;
     }

     .btn-primary {
        background-color: #1BCBF2;
        border-color: #1BCBF2;
     }

     .btn-primary:hover{
        background-color: #F057F2;
     }

     .btn {
        border: none;
     }
     .space{
    display: flex;
    justify-content: center;
    align-content: center;
    width: 100%;
    height: 400px;
    background-size: cover;
    background-position: center;
     }   

     h1{
        font-family: cursive;
        align-content: center;
        text-align: center;
        color: #ffff;
     }   

 </style>
<div class="container">
	<div style="height:100px;">
        <h1><b>¡BIENVENIDO JUGADOR!</b></h1>
	</div>
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> 
                    	<span class="pull-right"><span class="glyphicon glyphicon-pencil"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="signup">Registrarse</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="logform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Usuario" name="username" id="username" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Contraseña" name="password" id="password" type="password">
                        	</div>
                        	<button type="button" id="loginbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> <span id="logtext"> Iniciar Sesión </span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Registrarse
                    	<span class="pull-right"><span class="glyphicon glyphicon-log-in"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="login">Iniciar Sesión</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="susername" id="susername" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="spassword" id="spassword" type="password">
                        	</div>
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-check"></span> <span id="signtext">Registrarse</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
</div>
<script src="js/custom.js"></script>

<section>
            <div class="space">
                 <img src="imgpri/LogoSpaces.png">
             </div>
</section>

<style>
            body::-webkit-scrollbar{
    width: 10px;
    background: #F1A2F2;
    }
    body::-webkit-scrollbar-thumb{
    background: #1BCBF2;
    border-radius: 20px;
    }
        </style>

</body>
</html>