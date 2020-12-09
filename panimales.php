<?php
    $Nombre = include 'Nombre.php';
    $Nivel = include 'nivel.php';
?>

<!DOCTYPE html>
<!-- saved from url=(0025)http://192.168.1.60:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Practica Animales</title>
    <link rel="stylesheet" href="./panimales_files/bootstrap.min.css">
    <link rel="stylesheet" href="./panimales_files/css">
    <link rel="stylesheet" href="./panimales_files/css(1)">
    <link rel="stylesheet" href="./panimales_files/css(2)">
    <link rel="stylesheet" href="./panimales_files/css(3)">
    <link rel="stylesheet" href="./panimales_files/font-awesome.min.css">
    <link rel="stylesheet" href="./panimales_files/ionicons.min.css">
    <link rel="stylesheet" href="./panimales_files/Article-List.css">
    <link rel="stylesheet" href="./panimales_files/Features-Boxed.css">
    <link rel="stylesheet" href="./panimales_files/Highlight-Blue.css">
    <link rel="stylesheet" href="./panimales_files/Highlight-Clean.css">
    <link rel="stylesheet" href="./panimales_files/animate.min.css">
    <link rel="stylesheet" href="./panimales_files/aos.css">
    <link rel="stylesheet" href="./panimales_files/swiper.min.css">
    <link rel="stylesheet" href="./panimales_files/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="./panimales_files/Login-Form-Clean.css">
    <link rel="stylesheet" href="./panimales_files/Login-Form-Dark.css">
    <link rel="stylesheet" href="./panimales_files/Navigation-Clean.css">
    <link rel="stylesheet" href="./panimales_files/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./panimales_files/Simple-Slider.css">
    <link rel="stylesheet" href="./panimales_files/Team-Boxed.css">
</head>

<body id="page-top" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-shrink" id="mainNav">
        <div class="container"><a class="navbar-brand"> <?php echo $Nombre ?> - <?php echo $Nivel ?> </a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Animales.php">volver</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Inicio.html">CERRAR SESIÓN<br></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form>
        <h1>Heading</h1>
    </form>
    <div class="text-center border rounded-0 highlight-clean">
        <h4 class="text-left" style="color: rgb(244,122,10);">&nbsp; Lesson 10</h4>
        <form>
            <h1 class="text-center" style="color: rgb(235,11,11);">The animals<br></h1>
        </form>
        <h4 class="text-left border rounded-0" style="color: rgb(244,122,10);">&nbsp; To Practice</h4>
        <p class="text-left">&nbsp; &nbsp;Desarrolla la práctica.</p>
        <p class="text-center">&nbsp; &nbsp;Selecciona el nombre correcto de los animales</p><img src="./panimales_files/animales.jpg" style="width: 250px;height: 250px;"><small class="form-text text-muted"></small>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item" width="250"><a href="http://192.168.1.60:8000/#"></a>
                <h3 class="name"></h3><img src="./panimales_files/perroo.jpg" style="width: 150px;height: 150px;">
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(254,253,252);color: rgb(10,9,9);"><strong>Dog</strong></button>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);"><strong>Cat</strong></button>
                <h3 class="name"></h3>
            </div>
            <div class="col-sm-6 col-md-4 item" width="250"><a href="http://192.168.1.60:8000/#"></a>
                <h3 class="name"></h3><img src="./panimales_files/tigre.jpg" style="width: 150px;height: 150px;">
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(254,253,252);color: rgb(10,9,9);">Tiger</button>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">Lion</button>
                <h3 class="name"></h3>
            </div>
            <div class="col-sm-6 col-md-4 item" width="250"><a href="http://192.168.1.60:8000/#"></a>
                <h3 class="name"></h3><img src="./panimales_files/conejo.jpg" style="width: 150px;height: 150px;">
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(254,253,252);color: rgb(10,9,9);">Hen</button>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">Chicken</button>
                <h3 class="name"></h3>
            </div>
        </div>
    <script src="./panimales_files/jquery-3.3.1.min.js.descargar"></script>
    <script src="./panimales_files/bootstrap.min.js.descargar"></script>
    <script src="./panimales_files/smart-forms.min.js.descargar"></script>
    <script src="./panimales_files/jquery.easing.min.js.descargar"></script>
    <script src="./panimales_files/agency.js.descargar"></script>
    <script src="./panimales_files/bs-animation.js.descargar"></script>
    <script src="./panimales_files/aos.js.descargar"></script>
    <script src="./panimales_files/swiper.jquery.min.js.descargar"></script>
    <script src="./panimales_files/Simple-Slider.js.descargar"></script>
    <script id="bs-live-reload" data-sseport="55153" data-lastchange="1605665593890" src="./panimales_files/livereload.js.descargar"></script>
</body></html>