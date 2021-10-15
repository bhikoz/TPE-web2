<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class juegosView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
//VISTA DE JUEGOS PARA LOS NO LOGUEADOS (VISITANTES)
    function mostrarJuegos($juegos){
        $this->smarty->assign('titulo', 'Lista de juegos');
        $this->smarty->assign('juegos', $juegos);        
        $this->smarty->display('templates/tablaJuegos.tpl');
    }
//MUESTRA EL JUEGO EN INDIVIDUAL
    function mostrarJuego($juego){
        $this->smarty->assign('juego', $juego);
        $this->smarty->display('templates/juego.tpl');
     }
//MUESTRA EL HOME(PARA LOS NO LOGUEADOS)
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
    //HOME PARA LOS ADMINISTRADORES
    function showAdmLocation(){
        header("Location: ".BASE_URL."admin");
    }
    //VISTA DE LOGIN
    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
    
    //muestra el template de la vista admin de la tabla 
    function mostrarJuegosAdm ($juegos,$generos){
        $this->smarty->assign('juegos',$juegos);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/tablaAdminJuegos.tpl');
    }
    
    function formeditarjuegos($generos, $nombre, $id_juego){
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('nombre', $nombre);
        $this->smarty->assign('id_juego', $id_juego);
        $this->smarty->display('templates/editarjuego.tpl');
    }
}
