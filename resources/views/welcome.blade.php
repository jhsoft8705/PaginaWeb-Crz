<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="resources/css/app.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


    <title>CKruzRD</title>
  </head>
  <body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="57">
    <!-- Header --> 
    <header class="sticky-top">
      <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#main">
            <img  src="assets/img/iconpng.png" alt="Logo">
             COMUNICACIONES KRUZRD EIRL 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-center active" href="#main">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#speakers">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#place-time">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#contacto">Contactos</a>
              </li>
      
 
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- /Header -->
    @if(session('namemensaje'))
      
      <div class="alert alert-warning alert-dismissible fade show btn btn-platzi btn-block m-0" role="alert">
        <strong>Hola!</strong> {{session('namemensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> 
     </div>
      {{-- mensaje --}} 
    @endif
    {{-- /mensaje --}}
    <!-- Main -->
    <main id="main">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
          <div class="carousel-item ">
            <img class="d-block w-100" src="assets/img/tss.jpg" alt="Hawaii 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/two.jpg" alt="Hawaii 2">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/one.jpg" alt="Hawaii 3">
          </div>
          <div class="overlay carousel-caption">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-md-right ">
                  <h1>Que ofrecemos</h1>
                  <p class="d-none  d-md-block">
                  Ofrecemos soluciones innovadoras, 
                  transformamos y simplificamos vidas de nuestros clientes.
                  Y no nos conformamos, estamos dispuestos a cambiar para hacerlo mejor
                  </p>
                 <!-- colocar boton para contacto whatsapp-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- /Main -->

    <!-- speakers -->
    <section id="speakers" class="mt-4">
      <div class="container">
        <div class="row">
          <div class="col text-center text-capitalize">
            <h2>Nuestros Servicios</h2>
                     </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/plantaexterna.jpg" alt="te instalo fibra optica">
                <div class="card-body">
                  <h5 class="card-title text-center">PLANTA EXTERNA</h5>
                  <p class="card-text">
                    Diseño, implementación y mantenimiento para sistemas de cableado de diversos tipos, redes 
                    alámbricas e inalámbricas como tenedido de fibra optica y enlaces microondas</p>
                  <div class="badges">
                    <span class="badge badge-platzi mb-4">
                    Fibra óptica
                    </span>
                    <span class="badge badge-platzi mb-4">
                    Red eléctrica
                    </span>
                  </div>
                  
                  <a href="#" class="btn btn-primary">Mas informacion</a>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/plantainterna.jpg" alt="Te instalo un data center">
                <div class="card-body">
                  <h5 class="card-title text-center">PLANTA INTERNA</h5>
                  <p class="card-text">Diseño, suministro, energización 
                    e instalación de equipos que se ubican dentro de la edificación que alberga la central,
                    cabecera o nodo del servicio de telecomunicaciones.    </p>
                  <div class="badges">
                    <span class="badge badge-platzi mb-4">
                      Centrales
                    </span>
                    <span class="badge badge-platzi mb-4">
                      Data Center 
                    </span>
                  </div>
                  <a href="#" class="btn btn-primary">mas informacion</a>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/tss.jpg" alt="tss">
                <div class="card-body">
                  <h5 class="card-title text-center">TSS y LOS</h5>
                  <p class="card-text">Estidio de los sitios para la instalacion de equipos de comunicacion de transmision tanto opticos como de RF</p>
                  <div class="badges">
                    <span class="badge badge-platzi mb-4">
                        Estudios TSS y LOS
                    </span>
                  </div>
                  <a href="#" class="btn btn-primary">mas informacion</a>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/iot.jpg" alt="iot">
                <div class="card-body">
                  <h5 class="card-title text-center">Software</h5>
                  <p class="card-text">Placas de prototipado.
                     Abaratamiento de las comunicaciones.
                     Disponibilidad de sensores de bajo coste.
                    Plataformas IoT.</p>
                  <div class="badges">
                    <span class="badge badge-platzi mb-4">
                      IoT
                    </span>
                  </div>
                  <a href="#" class="btn btn-primary">mas informacion</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /speakers -->

    <!-- Lugar y fecha -->
    <section id="place-time">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 pl-0 pr-0">gzwrite
            <img src="assets/img/tel.jpg" alt="Foto de Honolulu">
          </div>
          <div class="col-12 col-lg-6 pt-4 pb-4">
            <h2>Las telecomunicaciones de Hoy</h2>
            <p>
            Según escribe Doreen Bogdan-Martin, Directora de la Oficina de Desarrollo de las Telecomunicaciones de la UIT, los encargados de la formulación de políticas deben trabajar codo con codo con los jóvenes para desarrollar conjuntamente soluciones nuevas
             y audaces para nuestro futuro digital común.
            </p>
            <a href="https://www.itu.int/es/Pages/default.aspx" target="_blank" class="btn btn-primary">Conoce más</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Lugar y fecha -->

    <!-- Coontacto formuario --> 
  
    <section id="contacto" class="pt-2 pb-2">
      <form id="contacto"action="{{route('pagina.store')}}" method="POST">
        @csrf
      <div class="container">
        <div class="row">
          <div class="col text-uppercase text-center">
            <h2>
              Conviertete en nuestro cliente 
          </h2> 
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
             Ingresa tu información en el siguiente formulario
          </div>
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2 pb-2">
            <form>
            <div class="form-row">
                <div class="form-group col">
                  <input type="text" name="nombre" class="form-control form-control-lg" required placeholder="Ingrese su Nombre y apellido">     
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" name="tel" class="form-control form-control-lg" required placeholder="Ingrese teléfono">     
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" name="email" class="form-control form-control-lg"required placeholder="Ingrese su correo electromico">     
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <textarea name="comentario" class="form-control form-control-lg" required placeholder="Envie un mensaje"></textarea>
                  <small class="form-text form-muted">
                    Nos prondremos en conctacto lo mas antes posible.
                  </small>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <button type="submit"class="btn btn-platzi btn-block">
                      Enviar
                  </button>
                </div> 
              </div>
            </form>
          </div>
        </div>
      </form>
      </div>
    </section> 
    <!-- /Conviertete en nuestro cliente -->
    <!-- Footer -->
    <footer id="footer" class="pb-4 pt-4">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-lg">
            <a href="#">Preguntas frecuentes</a>
          </div> 
          <div class="col-12 col-lg">
            <a href="#">Terminos y condiciones</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Privacidad</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Clientes</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Redes sociales</a>
          </div>

        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- Modal -->
    <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Comprar tickets</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>
            </form>
            <div class="alert alert-success" role="alert">
              Recibiras un correo una vez sea verificada tu compra!
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-platzi">Comprar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->
    <!--btn flotante-->
    <a href="https://wa.link/rdf3wr" class="btn-wsp" target="_blank"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp m-2"
        viewBox="0 0 16 16">
        <path
            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
    </svg>
</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="index.js">fdg</script>
  
</body></html>