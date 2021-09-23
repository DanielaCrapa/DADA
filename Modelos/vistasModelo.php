<?php
    class vistasModelo {

        /*--Modelo para vistas--*/
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=[];
            if(in_array($vistas, $listaBlanca)){
                if(is_file("./Vistas/contenidos/".$vistas."-view.php")){
                    $contenido="./Vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido="404";
                }
            }elseif($vistas=="index"){
                $contenido="index";
            }else{
                $contenido="404";
            }
            return $contenido;
        }
    }