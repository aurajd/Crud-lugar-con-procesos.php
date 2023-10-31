<?php
    // echo "Vamos a probar el redireccionamiento usando header";
    if($_GET["accion"]=="borrar"){
        header('Location:borrar.php?ip='.$_GET["ip"]);
    }
    if($_GET["accion"]=="modificar"){
        header('Location:modificar.php?ip='.$_GET["ip"]);
    }
    if(!isset($_GET["accion"])){
        header('Location:index.php');
    }
?>