{* {include file='templates/header.tpl'}


	<nav class="container navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#"><i class="fas fa-gamepad"></i>Juegos TUDAI<i class="fas fa-gamepad"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="admin">Vista Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home">Vista Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaGeneros">Generos</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="logout" >Logout</a>
                </li>
            </ul>
        </div>
  </nav>

<div class="container-lg">
<h2>JUEGOS POR GENERO</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del Juego</th>
      <th scope="col">Precio</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Genero</th>
      <th scope="col">Más info</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
   {foreach from=$juegos item=$juego} 
    <tr id="{$juego->id_juego}">
      <td>{$juego->nombre}</td>
      <td>{$juego->precio}</td>
      <td>{$juego->plataforma}</td>
      <td>{$juego->genero}</td>
      <td> <a href="juego/{$juego->id_juego}" class="btn btn-success">ver más</a></td>
      <td><a href="mostrarEditarJuego/{$juego->nombre}/{$juego->id_juego}"class="btn btn-primary">Editar</a></td>
      <td><a href="borrarJuego/{$juego->id_juego}"class="btn btn-danger">Borrar</a></td>
    </tr>
  {/foreach}
  </tbody>
</table>
</div>

{include file='templates/footer.tpl'} *}