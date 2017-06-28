<!DOCTYPE html>
<html>
<head>
    <title>Iniciar</title>
    <?php include '../General/Head.php'; ?>
</head>
<body class="cbp-spmenu-push">
	
    <?php include '../General/Menu.php';?>
    
<!-- banner -->
<div class="banner ">
	<div class="banner-left page-head">
		<div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
			<h1><a class="link link--ilin" href="index.php"><span>CR </span><span> Suggesions</span></a></h1>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- contact -->
<div class="contact">
	<div class="container">
		
		
		<div class="contact-grids">
                    <div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                        Se ha registrado con éxito.
                   </div>
                  
                  
                  <div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                    Error!
                  </div>
                    
                    
			
			<div class="col-md-6 contact-grid wow fadeInRight animated" data-wow-delay=".5s">
                            <h3 class="tittle">Iniciar Sesión</h3>
                            <form method='POST' action="../Admin/PrincipalAdministrativa.php">
                                    <input name='email' type="email" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo';}" required="">
                                    <input name='contrasena' type="password" placeholder="Contraseña" required="">
                                    <input type="submit" value="Iniciar Sesión" >
                                    <a href="../Admin/PrincipalAdministrativa.php?v=2">Probar Segundo menú</a>
                            </form>
			</div>
                    
                    <div class="col-md-6 contact-grid wow fadeInRight animated" data-wow-delay=".5s">
				<h3 class="tittle">Registrarse</h3>
                                <form>
                                    <input type="text" placeholder="Nombre" required="">
                                    <input type="email" placeholder="correo" required="">
                                    <input type="text" placeholder="Número telefónico" required="">
					<input type="submit" value="Registrar" >
				</form>
			</div>
		</div>
		
	</div>
    
    
    
</div>

<!-- Footer -->
<div class="copy-right wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <p> &copy; 2017 Gustavo Nájera Nájera - Bryan Espinoza</p>
    </div>
</div>

<!-- for bootstrap working -->
<script src="../../js/bootstrap.js"></script>

</body>
</html>