<section class="button">
    <button id="showLeftPush"><img src="../../images/menu.png" alt=""></button>
</section>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <h3>Menu</h3>
    <div class="logo">
        <a class=" link link--yaku" href="Preferencias.php"><span>Preferencias</span></a>
        <a class=" link link--yaku" href="ActualizarPerfil.php?v=2"><span>Actualizar mis datos</span></a>
        <a class=" link link--yaku" href="../Cliente/index.php"><span>Salir</span></a>
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