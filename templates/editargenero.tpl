{include file='templates/header.tpl'}

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

<div class="container">
  <form action="editarGenero" method="post">
    <div class="modal-header">
      <h5 class="modal-title">Editar Genero: {$nombre}</h5>
    </div>
    <div class="modal-body">
      <div class="form-row">
        <div class="col mb-3">
          <input class="form-control" placeholder="Nombre del Genero" type="text" name="nombreGenero">
          <input type="hidden" name="id_genero" value="{$id_genero}">
        </div>
        <div class="col mb-3">
          <input class="form-control" placeholder="Breve Descripcion del Genero" type="text" name="descripcionGenero">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
  </form>
</div>

{include file='templates/footer.tpl'}