<!DOCTYPE html>
<html>
<head>
    <title>Preferencias</title>
    <?php include '../General/Head.php'; ?>

    <!-- Style preferencias -->
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
	
    <?php include '../General/MenuAdministrativo_1.php';?>
    
<!-- banner -->
<div class="banner ">
	<div class="banner-left page-head">
		<div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
			<h1><a class="link link--ilin" href="PrincipalAdministrativa.php"><span>CR </span><span> Suggesions</span></a></h1>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- shortcodes -->
<div class="typrography">
	 <div class="container">
	      <h3 class="tittle">Preferencias</h3>
              
              
              <!-- Preferencias -->
              <div class="grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
                   
                  <div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                        Realizado con éxito.
                   </div>
                  
                  
                  <div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                    Error ! Al actualizar.
                  </div>
                  
                  
                    <form action="#">
                      
                            <div class="col-md-6">
                                 <h3 class="bars">Montaña<span class="badge badge-warning">25%</span></h3>
                                 <div class="progress">    
                                      <div class="progress-bar progress-bar-primary" style="width: 50%"></div>
                                 </div>
                                 
                                 <h4 class="bars">Nuevo % <input type="number" min="0" value="25" class="input-preferencias text-center"></h4>
                            </div>
                        
                            <div class="col-md-6">
                                 <h3 class="bars">Barato<span class="badge badge-warning">25%</span></h3>
                                 <div class="progress">    
                                      <div class="progress-bar progress-bar-primary" style="width: 50%"></div>
                                 </div>
                                 
                                 <h4 class="bars">Nuevo % <input type="number" min="0" value="25" class="input-preferencias text-center"></h4>
                            </div>
                        
                            <div class="col-md-6">
                                 <h3 class="bars">Lujoso<span class="badge badge-warning">25%</span></h3>
                                 <div class="progress">    
                                      <div class="progress-bar progress-bar-primary" style="width: 50%"></div>
                                 </div>
                                 
                                 <h4 class="bars">Nuevo % <input type="number" min="0" value="25" class="input-preferencias text-center"></h4>
                            </div>
                        
                            <div class="col-md-6">
                                 <h3 class="bars">Playa<span class="badge badge-warning">25%</span></h3>
                                 <div class="progress">    
                                      <div class="progress-bar progress-bar-primary" style="width: 50%"></div>
                                 </div>
                                 
                                 <h4 class="bars">Nuevo % <input type="number" min="0" value="25" class="input-preferencias text-center"></h4>
                            </div>
                        
                        <div class="row text-center">
                            <a href="#"><span class="btn btn-info btn-per">Actualizar</span></a>
                        </div>
                    </form>
                  
              </div>
         </div>
</div>
              
<div class="copy-right wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <p> &copy; 2017 Gustavo Nájera Nájera - Bryan Espinoza</p>
    </div>
</div>



<!-- for bootstrap working -->
<script src="../../js/bootstrap.js"></script>

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

              
</body>
</html>