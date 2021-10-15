<?php
require_once "./Model/juegosModel.php";
require_once "./View/juegosView.php";
require_once "./Helpers/authHelper.php";

class juegosController{

    private $juegosModel;
    private $generoModel;
    private $view;
    private $authHelper;

    function __construct(){
        $this->juegosModel = new juegosModel();
        $this->generoModel = new generoModel();
        $this->view = new juegosView();
        $this->authHelper = new authHelper();
    }
//muestra la lista de los juegos
    function mostrarJuegos(){
        $juegos = $this->juegosModel->obtenerJuegos();
        $this->view->mostrarJuegos($juegos);
    }
//muestra solo un juego 
    function mostrarJuego($id){
        $juego = $this->juegosModel->obtenerJuego($id);
        $this->view->mostrarJuego($juego);
    }
//MUESTRA LA TABLA DE JUEGOS PARA EL ADMINISTRADOR (CON BOTONES ABM)
    function mostrarJuegosAdm(){
        $this->authHelper->checkLoggedIn();
        $juegos = $this->juegosModel->obtenerJuegos();
        $generos = $this->generoModel->obtenerGeneros();
        $this->view->mostrarJuegosAdm($juegos,$generos);
    }
    //CREAR NUEVO JUEGO
    function agregarJuego(){
        //VERIFICAR OBTENER GENERO A TRAVES DE SELECT
        $this->juegosModel->insertarJuego($_POST['inputJuego'], $_POST['precioJuego'], $_POST['plataformaJuego'], $_POST['generoJuego']);
        $this->view->showAdmLocation();
    }
//ELIMINAR JUEGO DE LA LISTA -> NO ELIMINA VERIFICAR
    function eliminarJuego($id){
        $this->authHelper->checkLoggedIn();
        $this->juegosModel->deleteJuegoFromDB($id);
        $this->view->showAdmLocation();
    }
// //FALTA PODER HACER EL UPDATE 
    function editarJuego(){
        $this->authHelper->checkloggedIn();
        $this->juegosModel->editjuego($_POST['precioJuego'], $_POST['plataformaJuego'],$_POST['generoJuego'], $_POST['id_juego']);
        $this->view->showAdmLocation();
    }    
    
    function mostrarEditarJuego($generos,$nombre,$id_juego){
        $this->authHelper->checkloggedIn();
        $this->view->formeditarjuegos($generos,$nombre,$id_juego);
    }
    
    function mostrarJuegoPorGenero($id){
        $juego = $this->juegosModel->obtenerJuego($id);
        $this->view->mostrarJuego($juego);
    }
//MUESTRA LA TABLA DE JUEGOS PARA EL ADMINISTRADOR (CON BOTONES ABM)
    function mostrarJuegosPorGeneroAdm($genero){
        $this->authHelper->checkLoggedIn();
        $juegos = $this->juegosModel->juegoPorGenero($genero);
        $generos = $this->generoModel->obtenerGeneros();
        $this->view->mostrarJuegosAdm($juegos,$generos);
    }
}
