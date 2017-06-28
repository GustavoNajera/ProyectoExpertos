
<!DOCTYPE html>
<html>
<head>
    <title>CRSuggesions</title>
    <?php include '../General/Head.php' ?>
</head>

<body class="cbp-spmenu-push">
    
    <?php include '../General/Menu.php';?>
    
<!-- banner -->
<div class="banner ">
	<div class="banner-left page-head">
		<div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
                    <h1><a class="link link--ilin" href="../Cliente/index.php"><span>CR </span><span> Suggesions</span></a></h1>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- contact -->
<div class="gallery">
    <div class="container">
        <h3 class="tittle">Nombre del centro turistico</h3>
        
        <!-- Imagen -->
        <div class="gallery-grids">
            <div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                <a href="../../images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="../../images/g1.jpg" alt=" " />
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Royal Shine</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
                                    <span class="separator"></span>

                            </div>
                            </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Fin Imagen -->
        
        <div class="col-md-6">
            <p>Aqui va la descripcion, por ejemplo: Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
            <p>Ubicación</p>
        </div>
    </div>


    <div class="copy-right wow fadeInLeft animated" data-wow-delay=".5s" style="position: absolute; bottom: 0px; width: 100%">
    <div class="container">
        <p> &copy; 2017 Gustavo Nájera Nájera - Bryan Espinoza</p>
    </div>
</div>

<!-- for bootstrap working -->
	<script src="../../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
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