<?php
    $Nombre = include 'Nombre.php';
    $Nivel = include 'nivel.php';

    $tituloteo = include 'Titulo.php';
    $ext = include 'Extencion.php';
?>

<!DOCTYPE html>
<!-- saved from url=(0025)http://192.168.1.13:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Adjetivos</title>
    <link rel="stylesheet" href="./Adjetivos_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Adjetivos_files/css">
    <link rel="stylesheet" href="./Adjetivos_files/css(1)">
    <link rel="stylesheet" href="./Adjetivos_files/css(2)">
    <link rel="stylesheet" href="./Adjetivos_files/css(3)">
    <link rel="stylesheet" href="./Adjetivos_files/font-awesome.min.css">
    <link rel="stylesheet" href="./Adjetivos_files/Article-List.css">
    <link rel="stylesheet" href="./Adjetivos_files/Features-Boxed.css">
    <link rel="stylesheet" href="./Adjetivos_files/Highlight-Blue.css">
    <link rel="stylesheet" href="./Adjetivos_files/Highlight-Clean.css">
    <link rel="stylesheet" href="./Adjetivos_files/swiper.min.css">
    <link rel="stylesheet" href="./Adjetivos_files/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="./Adjetivos_files/Login-Form-Clean.css">
    <link rel="stylesheet" href="./Adjetivos_files/Login-Form-Dark.css">
    <link rel="stylesheet" href="./Adjetivos_files/Navigation-Clean.css">
    <link rel="stylesheet" href="./Adjetivos_files/Projects-Clean.css">
    <link rel="stylesheet" href="./Adjetivos_files/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./Adjetivos_files/Simple-Slider.css">
    <link rel="stylesheet" href="./Adjetivos_files/Team-Boxed.css">
    <link rel="stylesheet" href="./Adjetivos_files/Team-Clean.css">
<style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{-webkit-animation:n0BD1--rotation 3.5s linear forwards;animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style></head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand"> <?php echo $Nombre ?> - <?php echo $Nivel ?> </a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Nivel basico.php">aCTIVIDADES</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Proceso.html">FORO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="NotasBasico.php">NOTA</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Inicio.html">CERRAR SESiÓN<br></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Articles</h2>
            </div>
            <h2 class="text-center" style="color: rgb(228,15,15);">Adjectives<br></h2>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="http://192.168.1.13:8000/#"></a>
                    <div class="intro">
                        <h2 class="text-center">Teoría</h2>
                        <p class="text-center">Lee y revisa atentamente todos los contenidos en el orden que se muestran a continuación.<br>&nbsp;</p>
                    </div><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="./Adjetivos_files/qRKrtiFhD5c.html" style="width: 289.984px;height: 193.016px;"></iframe>
                    <h3 class="name"><a class="text-center" href="https://drive.google.com/drive/u/1/folders/1-SGdbZd97rwnGBRRtAy311w5NuAhVp90" style="color: rgb(13,13,12);font-size: 20px;"> <?php echo "$tituloteo$ext"?> </a></h3>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="http://192.168.1.13:8000/#"></a>
                    <div class="intro">
                        <h2 class="text-center">Práctica</h2>
                        <p class="text-center">Resuelve todos los ejercios prácticos que se le brindan en las siguientes direcciones.<br><br></p>
                    </div>
                    <h3 class="name"><a class="text-center" href="padjetivos.php" style="color: rgb(13,13,12);font-size: 20px;"> Practica con algunos ejercicios.</a></h3>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="http://192.168.1.13:8000/#"></a>
                    <div class="intro">
                        <h2 class="text-center">Evaluaciones</h2>
                        <p class="text-center">Resuelve&nbsp;todas&nbsp;las evaluaciones&nbsp;que se le brindan en las siguientes direcciones.<br><br></p>
                    </div>
                    <h3 class="name"><a class="text-center" href="eadjetivos.php" style="color: rgb(13,13,12);font-size: 20px;"> Mide tu capacidad con el cuestionario.</a></h3>
                </div>
                <div class="col text-right d-xl-flex justify-content-xl-end">
                    <div class="btn-group" role="group"><a class="btn btn-primary active text-right d-xl-flex justify-content-xl-end" role="button" href="Nivel basico.php">Volver</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-clean"></div>
    <div class="team-clean"></div>
    <div class="team-boxed"></div>
    <script src="./Adjetivos_files/jquery-3.3.1.min.js.descarga"></script>
    <script src="./Adjetivos_files/bootstrap.min.js.descarga"></script>
    <script src="./Adjetivos_files/jquery.easing.min.js.descarga"></script>
    <script src="./Adjetivos_files/agency.js.descarga"></script>
    <script src="./Adjetivos_files/swiper.jquery.min.js.descarga"></script>
    <script src="./Adjetivos_files/Simple-Slider.js.descarga"></script>
    <script id="bs-live-reload" data-sseport="55283" data-lastchange="1605304412393" src="./Adjetivos_files/livereload.js.descarga"></script>


</body></html>