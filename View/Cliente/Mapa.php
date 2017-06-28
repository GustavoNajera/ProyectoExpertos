<!DOCTYPE html>
<html>
<head>
<title>Mapa</title>
<?php include '../General/Head.php'; ?>


<!-- Style personal -->
<link href="../../css/StylePer.css" rel="stylesheet" type="text/css" media="all">

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

<!-- Titulo -->
<div class="container">
    <h3 class="tittle">Mapa</h3>			
</div>


<!-- Mapa del sitio -->
<div class="">
    <div style="overflow-x:auto;">
        <table class="table-per">
            
            <!-- Fila 1 -->
            <tr>
                <td></td>
                <td></td>
                <!-- Item 1 -->
                <td>
                    <a href="index.html">
                        <div class="item-per text-center color-item-prin">
                            <h3>Inicio</h3>
                        </div>
                    </a>

                    <div class="linea-vertical"></div>
                </td>
                <td></td>
                <td></td>
            </tr>
            <!-- Fin de fila 1 -->
            
            <!-- Linea horizontal -->
            <tr>
                <td><div class="linea-horizontal-iz"></div></td>
                <td><div class="linea-horizontal"></div></td>
                <td><div class="linea-horizontal"></div></td>
                <td><div class="linea-horizontal"></div></td>
                <td><div class="linea-horizontal-der"></div></td>
            </tr>  
            
            <!-- Segunda fila -->
            <tr>
                
                <!-- Item1 -->
                <td>
                    <div class="linea-vertical"></div>
                    <div class="flecha-abajo"></div>

                    <a href="#">
                        <div class="item-per text-center color-item-success">
                            <h3>Galería</h3>
                        </div>
                    </a>
                </td>

                <!-- Item 2 -->
                <td>
                    <div class="linea-vertical"></div>
                    <div class="flecha-abajo"></div>
                    
                    <a href="#">
                        <div class="item-per text-center color-item-success">
                            <h3>Contáctenos</h3>
                        </div>
                    </a>
                </td>

                <!-- Item 3 -->
                <td>
                    <div class="linea-vertical"></div>
                    <div class="flecha-abajo"></div>

                    <a href="#">
                        <div class="item-per text-center color-item-success">
                            <h3>Mapa</h3>
                        </div>
                    </a>
                </td>
                <!-- Item 4 -->
                <td>
                    <div class="linea-vertical"></div>
                    <div class="flecha-abajo"></div>

                    <a href="#">
                        <div class="item-per text-center color-item-success">
                            <h3>Ingresar</h3>
                        </div>
                    </a>
                </td>
                
                 <!-- Item 5 -->
                <td>
                    <div class="linea-vertical"></div>
                    <div class="flecha-abajo"></div>

                    <a href="#">
                        <div class="item-per text-center color-item-success">
                            <h3>Recomendaciones</h3>
                        </div>
                    </a>
                </td>
            </tr>
            
           
            <!-- Segunda fila -->
            <tr>
                <!-- Item1 -->
                <td>
                    <div class="linea-vertical"></div>
                    <div class="flecha-abajo"></div>

                    <a href="#">
                        <div class="item-per text-center color-item-success">
                            <h3>Detalle</h3>
                        </div>
                    </a>
                </td>
            </tr>
            
            
            
        </table>
        
    </div>
    
</div>

<!-- Fin del mapa -->

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