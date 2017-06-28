<!DOCTYPE html>
<html>
<head>
<title>CRSuggesions</title>
<?php include '../General/Head.php'; ?>
<style>
    .input-preferencias{
        background-color: transparent;
        color: #00C6D7;
        border: none;
        width: 80px; 
        border: solid 1px;
        border-bottom: none;
        border-right: none;
    }
    
    .input-preferencias:focus{
        outline:0px;
    }
    
    .btn-per{
        margin: 20px;
        width: 50%
    }
</style>

</head>
<body class="cbp-spmenu-push">
	
    <?php include '../General/MenuAdministrativo.php';?>
    
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
		
            <div class="row">
                <div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissable">
                   <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                   Insertado con éxito.
               </div>


               <div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissable">
                 <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                 Error al insertar.
               </div>
            </div>
		<div class="contact-grids">
                    
                    <div class="row">
                        <h3 class="tittle">Insertar Centro Turístico</h3>
                    </div>
                     
                <form action="#">
                    <div class="col-md-6 contact-grid wow fadeInRight animated" data-wow-delay=".5s">
                            
                        <input type="text" placeholder="Nombre" required="">
                        <input style="margin-top: 10px;" type="text" placeholder="Número telefónico" required="">
                                
                    </div>
                    
                    <div class="col-md-6 contact-grid wow fadeInRight animated text-center" data-wow-delay=".5s">
				
                        <div class="col-xs-6">
                            <h3 class="bars">Montaña<input type="number" min="0" value="25" class="input-preferencias text-center"></h3>
                            <h3 class="bars">Barato<input type="number" min="0" value="25" class="input-preferencias text-center"></h3>
                        </div>
                        
                        <div class="col-xs-6">
                            <h3 class="bars">Lujoso<input type="number" min="0" value="25" class="input-preferencias text-center"></h3>
                            <h3 class="bars">Playa<input type="number" min="0" value="25" class="input-preferencias text-center"></h3>
                        </div>
                        
                    <div class="col-md-6 col-md-offset-3 contact-grid wow fadeInRight animated text-center" data-wow-delay=".5s">
                        <input type="submit" value="Insertar" >
                    </div>
                </form>
                    
		</div>
		
	</div>
    
    
    
</div>

<!-- Footer -->
<div style="position: absolute; bottom: 0px; width: 100%;" class="copy-right wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <p> &copy; 2017 Gustavo Nájera Nájera - Bryan Espinoza</p>
    </div>
</div>

<!-- for bootstrap working -->
	<script src="../../js/bootstrap.js"></script>

</body>
</html>