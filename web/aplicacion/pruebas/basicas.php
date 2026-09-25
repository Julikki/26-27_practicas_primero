<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Pruebas basicas");
cuerpo();  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() 
{}

//vista
function cuerpo()
{
?>
    <br><br>esto es html <br><br>
    <?php
        echo "Y esto un echo php Vicentett1";
    ?>

<?php
}
