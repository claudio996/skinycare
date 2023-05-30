<!DOCTYPE html>
<html lang="en">
<!--Este es!-->
<head>
    <meta charset="utf-8">
    <title>SkinyCare | Fotodepilacion y Fototerapia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="favicon.png">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-1 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/logo.png" alt="" width="250px" height="250px"> </h2>
         
           

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Quienes Somos</a>
               
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/servicios-1') }}"  class="dropdown-item">Fotodepilación</a>
                        <a href="{{ url('/servicios-2')  }}"  class="dropdown-item">Fototerapia</a>
                        {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Consultas</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">-----------</a>
                        <a href="testimonial.html" class="dropdown-item">----------</a>
                        {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                    </div>
                </div>
                <a href="{{ url('/contactos')  }}" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Cotiza aqui<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

       <div class="row">
        <div class="col-12">
             <nav class="navbar navbar-expand-xl bg-info navbar-light shadow sticky-top p-4">
     
        
                       

    
       </div>

    </div>
         
    </nav>
    <!-- Navbar End -->