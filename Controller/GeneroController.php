<?php
require_once "./Model/generoModel.php";
require_once "./View/generoView.php";
require_once "./Helpers/authHelper.php";

class generoController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new generoModel();
        $this->view = new generoView();
        $this->authHelper = new authHelper();
    }
//muestra la lista de todos los generos
    function mostrarGeneros(){
        $generos = $this->model->obtenerGeneros();
        $this->view->mostrarGeneros($generos);
    }
//muestra solo un genero en especifico 
    function mostrarGenero($id){
        $genero = $this->model->obtenerGenero($id);
        $this->view->mostrarGenero($genero);
    }
//MUESTRA LA TABLA DE GENEROS PARA EL ADMINISTRADOR (CON BOTONES ABM)
    function mostrarGenerosAdm(){
        $this->authHelper->checkLoggedIn();
        $generos = $this->model->obtenerGeneros();
        $this->view->mostrarGenerosAdm($generos);
    }
    //CREAR NUEVO GENERO
    function agregarGenero(){
        $this->model->insertarGenero($_POST['inputNombre'], $_POST['inputDescripcion']);
        $this->view->showAdmLocation();
    }
//ELIMINAR GENERO DE LA LISTA -> NO ELIMINA VERIFICAR
    function eliminarGenero($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteGeneroFromDB($id);
        $this->view->showAdmLocation();
    }
// //FALTA PODER HACER EL UPDATE 
     function editarGenero(){
        $this->authHelper->checkloggedIn();
        $this->model->editGenero($_POST['nombreGenero'], $_POST['descripcionGenero'], $_POST['id_genero']);
        $this->view->showAdmLocation();
     }

     function mostrarEditarGenero($nombre,$id_genero){
        $this->authHelper->checkloggedIn();
        $this->view->formEditarGenero($nombre,$id_genero);
    }
     function obtenerGenres() {
        $generos=$this->model->obtenerGeneros();   
        return $generos;
        }
    
}