<?php
    $Nombre = include 'Nombre.php';
    $Nivel = include 'nivel.php';
?>

<!DOCTYPE html>
<!-- saved from url=(0025)http://192.168.1.60:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Practica Vocales</title>
    <link rel="stylesheet" href="./pvocales_files/bootstrap.min.css">
    <link rel="stylesheet" href="./pvocales_files/css">
    <link rel="stylesheet" href="./pvocales_files/css(1)">
    <link rel="stylesheet" href="./pvocales_files/css(2)">
    <link rel="stylesheet" href="./pvocales_files/css(3)">
    <link rel="stylesheet" href="./pvocales_files/font-awesome.min.css">
    <link rel="stylesheet" href="./pvocales_files/ionicons.min.css">
    <link rel="stylesheet" href="./pvocales_files/Article-List.css">
    <link rel="stylesheet" href="./pvocales_files/Features-Boxed.css">
    <link rel="stylesheet" href="./pvocales_files/Highlight-Blue.css">
    <link rel="stylesheet" href="./pvocales_files/Highlight-Clean.css">
    <link rel="stylesheet" href="./pvocales_files/animate.min.css">
    <link rel="stylesheet" href="./pvocales_files/aos.css">
    <link rel="stylesheet" href="./pvocales_files/swiper.min.css">
    <link rel="stylesheet" href="./pvocales_files/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="./pvocales_files/Login-Form-Clean.css">
    <link rel="stylesheet" href="./pvocales_files/Login-Form-Dark.css">
    <link rel="stylesheet" href="./pvocales_files/Navigation-Clean.css">
    <link rel="stylesheet" href="./pvocales_files/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./pvocales_files/Simple-Slider.css">
    <link rel="stylesheet" href="./pvocales_files/Team-Boxed.css">
</head>

<body id="page-top" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand"> <?php echo $Nombre ?> - <?php echo $Nivel ?> </a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Vocales.php">VOLVER</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Inicio.html">CERRAR SESIÓN<br></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form>
        <h1>Heading</h1>
    </form>
    <div class="text-center border rounded-0 highlight-clean">
        <h4 class="text-left" style="color: rgb(244,122,10);">&nbsp; Lesson 1</h4>
        <form>
            <h1 class="text-center" style="color: rgb(235,11,11);">The Vowels</h1>
        </form>
        <h4 class="text-left border rounded-0" style="color: rgb(244,122,10);">&nbsp;&nbsp;<strong>&nbsp; To Practice&nbsp;</strong><br></h4>
        <p class="text-left">&nbsp; A practicar. Elige la opción correcta<br></p>
        <p class="text-center">Elige con que vocal comienza cada palabra según la imagen</p><small class="form-text text-muted"></small>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item" width="250"><a href="http://192.168.1.60:8000/#"></a><img src="./pvocales_files/naranjaa.jpg" style="width: 150px;height: 150px;">
                <h3 class="name"></h3>
                <h3 class="name"></h3><input type="text" maxlength="1" minlength="1" pattern="A" style="width: 50px;"><small style="font-size: 22px;">&nbsp;range</small>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">A</button>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">O</button></div>
            <div class="col-sm-6 col-md-4 item" width="250"><a href="http://192.168.1.60:8000/#"></a><img src="./pvocales_files/iglu.jpg" style="width: 150px;height: 150px;">
                <h3 class="name"></h3>
                <h3 class="name"></h3><input type="text" style="width: 50px;"><small style="font-size: 22px;">&nbsp;gloo</small>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">I</button>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">E</button></div>
            <div class="col-sm-6 col-md-4 item" width="250"><a href="http://192.168.1.60:8000/#"></a><img src="./pvocales_files/manzana.jpg" style="width: 150px;height: 150px;">
                <h3 class="name"></h3>
                <h3 class="name"></h3><input type="text" style="width: 50px;"><small style="font-size: 22px;">&nbsp;pple</small>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">O</button>
                <h3 class="name"></h3><button class="btn btn-primary" type="button" style="background-color: rgb(249,249,248);color: rgb(8,8,8);">A</button></div>
        </div>
    <script src="./pvocales_files/jquery-3.3.1.min.js.descargar"></script>
    <script src="./pvocales_files/bootstrap.min.js.descargar"></script>
    <script src="./pvocales_files/smart-forms.min.js.descargar"></script>
    <script src="./pvocales_files/jquery.easing.min.js.descargar"></script>
    <script src="./pvocales_files/agency.js.descargar"></script>
    <script src="./pvocales_files/bs-animation.js.descargar"></script>
    <script src="./pvocales_files/aos.js.descargar"></script>
    <script src="./pvocales_files/swiper.jquery.min.js.descargar"></script>
    <script src="./pvocales_files/Simple-Slider.js.descargar"></script>
    <script id="bs-live-reload" data-sseport="62245" data-lastchange="1604868299790" src="./pvocales_files/livereload.js.descargar"></script>
</body></html>