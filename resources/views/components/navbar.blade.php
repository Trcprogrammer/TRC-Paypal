<nav class="navbar navbar-expand-lg">
    <div class="container" >
        <a  class="navbar-brand" href=""><img width="100px"  src="{{asset('private_tunnel_vpn.png')}}" alt=""> <span class="fw-bold fs-3" >Compras</span></a>
  <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#contenido"> <span class="navbar-toggler-icon" ></span></button>
    <div class="collapse navbar-collapse  d-flex justify-content-center" id="contenido">
        <ul class="nav navbar-nav">
            <li class="nav-item fs-5"><a class="nav-link" href="">Categoria</a></li>
            <li class="nav-item fs-5"><a class="nav-link" href="">Reviews</a></li>
            <li class="nav-item fs-5"><a class="nav-link" href="">Favoritos</a></li>

        </ul>

    </div>

    <div>
        <a  href="{{route('sistemas.create')}}" class="btn btn-outline-danger btn-lg  " >Suscribirte<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
          </svg></a>
    </div>
    </div>

</nav>