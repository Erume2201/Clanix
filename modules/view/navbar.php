


<nav class="navbar navbar-expand-lg bg-body-tertiary 
  navbar bg-dark" data-bs-theme="dark"> <!--Agregamos color de fonfo al navbar-->
  <div class="container-fluid">
    <!--Agregamos el icono al navbar-->
    <img src="image/imagenicono.png" alt="" width="3%"></img>

    <a class="navbar-brand" href="./index.php">Clanix</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?module=home">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?module=calculadora">Calculadora</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?module=service">Servicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" 
              data-bs-toggle="modal" data-bs-target="#PaquetePersonal">Paquete Personal</a></li>

            <li><a class="dropdown-item" href="#"
              data-bs-toggle="modal" data-bs-target="#PaquetePareja">Paquete parejas</a></li>
            <li><hr class="dropdown-divider"></li>
            
            <li><a class="dropdown-item" href="#"
              data-bs-toggle="modal" data-bs-target="#PaqueteGrupal">Paquete grupal</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?module=contact">Contacto</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>