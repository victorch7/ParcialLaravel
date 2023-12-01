@extends('adminlte::page')

@section('title', 'Presentacion')

@section('content_header')
        <header class="mt-3 mb-5">
            <h1 class="text-center">Bienvenido a nuestra tienda de ropa :3  <i class="fa-solid fa-store"></i> </h1>
            <p class="lead text-center"><strong>Encuentra las últimas tendencias de moda</strong></p>
        </header>
@stop

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body>
    <div class="container m-3">
                <section>
                    <h2 class="text-center">Somos una tienda comprometida con la moda y la dispoción de nuestros clientes</h2>
                    <h4>Algunas de nuestras marcas:</h4>                
                </section>
    <div class="container m-3 bg-light">

    <div class="row justify-content-center"> <!-- Agrega esta fila para centrar el carousel -->
        <div class="col-8"> <!-- Define el ancho del carousel -->
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/nike.jpg') }}" class="d-block" style="width: 100%;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/puma.jpg') }}" class="d-block" style="width: 100%;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/adidas.png') }}" class="d-block" style="width: 100%;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

        <footer class="mt-5 text-center">
            <p>&copy; 2023 Tienda de Ropa</p>
            <p> <i class="fa-solid fa-phone"></i> 3156770890</p>
             <p> <i class="fa-solid fa-map-pin"></i> Ipiales, Nariño</p>
        </footer>
    </div>
</body>

<!-- Bootstrap Bundle (Popper incluido) y JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stop

@section('content_footer')
        <header class="mt-3 mb-5">
            <h1 class="text-center">Bienvenido a nuestra tienda de ropa :3  <i class="fa-solid fa-store"></i> </h1>
            <p class="lead text-center">Encuentra las últimas tendencias de moda</p>
        </header>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop