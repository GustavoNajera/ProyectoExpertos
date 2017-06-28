<!DOCTYPE html>
<html>
<head>
<title>CRSuggesions</title>
<?php include '../General/Head.php'; ?>
</head>
<body class="cbp-spmenu-push">
	
    <?php
        if (isset($_GET['v'])){
            include '../General/MenuAdministrativo_1.php';   
        }else {
            include '../General/MenuAdministrativo.php';
        }    
    ?>
    
<!-- banner -->
<div class="banner ">
	<div class="banner-left page-head">
		<div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
			<h1><a class="link link--ilin" href="PrincipalAdministrativa.php"><span>CR </span><span> Suggesions</span></a></h1>
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
                        Actualizado con éxito
                   </div>
                  
                  
                  <div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                    Error al actualizar
                  </div>
                    
                        <div class="col-md-6 col-md-offset-3 contact-grid wow fadeInRight animated" data-wow-delay=".5s">
				<h3 class="tittle">Atualizar datos</h3>
                                <form>
                                    <input type="text" placeholder="Nombre" required="">
                                    <input type="email" placeholder="correo" required="">
                                    <input type="text" placeholder="Número telefónico" required="">
                                    <input type="submit" value="Actualizar" >
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