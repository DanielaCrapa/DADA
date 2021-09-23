<?php

    require_once "./configuracion/APP.php";
    require_once "./Controladores/vistasControlador.php";

    $plantilla = new vistasControlador();
    $plantilla->obtener_plantilla_controlador();