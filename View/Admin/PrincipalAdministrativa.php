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
<div class="banner">
	<div class="banner-left">
		<div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
			<h1><a class="link link--ilin" href="PrincipalAdministrativa.php"><span>CR </span><span> Suggesions</span></a></h1>
		</div>
		<div class="clearfix"></div>
		<div class="banner-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3>Bienvenido A la seccion administrativa</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error
			sit voluptatem accusantium doloremque laudantium, 
			totam rem aperiam. </p>
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