<section class="button">
    <button id="showLeftPush"><img src="../../images/menu.png" alt=""></button>
</section>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <h3>Menu</h3>
    <div class="logo">
        <a class=" link link--yaku active" href="../Cliente/index.php"><span>I</span><span>n</span><span>i</span><span>c</span><span>i</span><span>o</span></a>
        <a class=" link link--yaku" href="../Cliente/Recomendaciones.php"><span>R</span><span>e</span><span>c</span><span>o</span><span>m</span><span>e</span><span>n</span><span>d</span><span>a</span><span>c</span><span>i</span><span>o</span><span>n</span><span>e</span><span>s</span></a>
        <a class=" link link--yaku" href="../Cliente/Sesion.php"><span>S</span><span>e</span><span>s</span><span>i</span><span>ó</span><span>n</span></a>
        <a class=" link link--yaku" href="../Cliente/mapa.php"><span>M</span><span>a</span><span>p</span><span>a</span></a>
        <a class=" link link--yaku" href="../Cliente/Preferencias.php"><span>P</span><span>r</span><span>e</span><span>f</span><span>e</span><span>r</span><span>e</span><span>n</span><span>c</span><span>i</span><span>a</span><span>s</span></a>
        <a class=" link link--yaku" href="../Cliente/Contactenos.php"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span><span>e</span><span>n</span><span>o</span><span>s</span></a>
        <a class=" link link--yaku" href="../Cliente/Creditos.php"><span>C</span><span>r</span><span>é</span><span>d</span><span>i</span><span>t</span><span>o</span><span>s</span></a>
    </div>
</nav>
		  
<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script src="../../js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };

    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
                classie.toggle( showLeftPush, 'disabled' );
        }
        if( button !== 'showRightPush' ) {
                classie.toggle( showRightPush, 'disabled' );
        }
    }
</script>