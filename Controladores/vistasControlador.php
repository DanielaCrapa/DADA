<?php
    require_once "./Modelos/vistasModelo.php";

    class vistasControlador extends vistasModelo{

        /*--Controlador para traer plantilla de vistas--*/
        public function obtener_plantilla_controlador(){
            return require_once "./Vistas/vista.php";
        }

        /*--Controlador para traer vista*/
        public function obtener_vistas_controlador(){
            if(isset($_GET['views'])){
                $ruta=explode("/", $_GET['views']);
                $respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
            }else {
                $respuesta="index";
            }
            return $respuesta;
        }
    }