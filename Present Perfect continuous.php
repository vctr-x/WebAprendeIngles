<?php
    $conectar = include 'Conexion.php';

    $usuario = include 'usuario.php';

    $sql= "SELECT * FROM tbl_estudiante WHERE ID_Estudiante = $usuario";
    
    $ejecutar= mysqli_query($conectar, $sql);

    if(!$ejecutar){
        header("location:Error.html");
    }else{
        while($row = $ejecutar->fetch_array()){
            $Nombre = $row['Nombre_Est'];
            $Nivel = $row['Nivel_Est'];
        }
    }

    $sqlT0001= "SELECT * FROM tbl_Recurso WHERE ID_Recurso = 'RA_002'";
    
    $ejecutarT0001= mysqli_query($conectar, $sqlT0001);

    if(!$ejecutarT0001){
        header("location:Error.html");
    }else{
        while($rowT0001 = $ejecutarT0001->fetch_array()){
            $tituloteo = $rowT0001['TituloRecurso'];
            $ext = $rowT0001['TipoRecurso'];
        }
    }
?>

<!DOCTYPE html>
<!-- saved from url=(0025)http://192.168.1.13:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>titulo</title>
    <link rel="stylesheet" href="./Present Perfect continuous_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/css(1)">
    <link rel="stylesheet" href="./Present Perfect continuous_files/css(2)">
    <link rel="stylesheet" href="./Present Perfect continuous_files/css(3)">
    <link rel="stylesheet" href="./Present Perfect continuous_files/font-awesome.min.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Article-List.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Features-Boxed.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Highlight-Blue.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Highlight-Clean.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/swiper.min.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Login-Form-Clean.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Login-Form-Dark.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Navigation-Clean.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Simple-Slider.css">
    <link rel="stylesheet" href="./Present Perfect continuous_files/Team-Boxed.css">
<style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{-webkit-animation:n0BD1--rotation 3.5s linear forwards;animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style></head>

<body id="page-top" style="height: 850PX;">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="http://192.168.1.13:8000/#page-top"> <?php echo $Nombre ?> - <?php echo $Nivel ?> </a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Nivel Avanzado.php">ACTIVIDADES</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Proceso.html">FORO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="NotasAvanzado.php">NOTAS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Inicio.html">CERRAR SESiÓN<br></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form>
        <h1>Heading</h1>
    </form>
    <div class="text-center border rounded-0 highlight-clean" style="height: 850px;">
        <h4 class="text-left" style="color: rgb(244,122,10);">&nbsp; Lesson 2</h4>
        <h1 style="color: RED;"><strong>Present perfect continuous</strong><br></h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 item"><a href="http://192.168.1.13:8000/#"></a>
                <div class="intro">
                    <h2 class="text-center" style="padding-top: 40PX;margin-bottom: 40px;margin-top: 40px;">Teoría</h2>
                    <p class="text-center">Lee y revisa atentamente todos los contenidos en el orden que se muestran a continuación.<br>&nbsp;</p>
                </div><div class="col">
                <iframe id="video" width="560" height="315" src="./Present Perfect continuous_files/5CQx-bfMCxg.html" style="width: 200.984px;height: 193.016px;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <h3 class="name" style="margin-top: 20PX;background-color: #ffffff;"><a class="text-center" href="https://drive.google.com/drive/u/1/folders/1h2qcxfIyq_KStQHuOvgHF1Oku700Pcsu" style="color: rgb(13,13,12);font-size: 20px;background-color: rgb(255,255,255);"> <?php echo "$tituloteo$ext"?> </a></h3>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href=""></a>
                <div class="intro" style="margin-top: 40PX;">
                    <h2 class="text-center" style="margin-bottom: 40PX;padding-top: 40px;">Práctica</h2>
                    <p class="text-center">Resuelve todos los ejercios prácticos que se le brindan en las siguientes direcciones.<br><br></p>
                </div>
                <h3 class="name" style="margin-top: 241PX;background-color: #ffffff;"><a class="text-center" href="pPresent Perfect continuous.html" style="color: rgb(13,13,12);font-size: 20px;background-color: #ffffff;"> Practica con algunos ejercicios.</a></h3>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href=""></a>
                <div class="intro" style="margin-top: 40PX;">
                    <h2 class="text-center" style="margin-bottom: 40PX;padding-top: 40px;">Evaluación</h2>
                    <p class="text-center">Resuelve&nbsp;todas&nbsp;las evaluaciones&nbsp;que se le brindan en las siguientes direcciones.<br><br></p>
                </div>
                <h3 class="name" style="margin-top: 244PX;background-color: #ffffff;"><a class="text-center" href="ePresent Perfect continuous.html" style="color: rgb(13,13,12);font-size: 20px;background-color: #ffffff;"> Mide tu capacidad con el cuestionario.</a></h3>
            </div>
        </div>
        <div class="col text-right d-xl-flex justify-content-xl-end">
            <div class="btn-group" role="group"><a class="btn btn-primary active text-right d-xl-flex justify-content-xl-end" role="button" href="Nivel Avanzado.php">Volver</a></div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img src="./Present Perfect continuous_files/1-full.jpg" class="img-fluid d-block mx-auto">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img src="./Present Perfect continuous_files/2-full.jpg" class="img-fluid d-block mx-auto">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img src="./Present Perfect continuous_files/3-full.jpg" class="img-fluid d-block mx-auto">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img src="./Present Perfect continuous_files/4-full.jpg" class="img-fluid d-block mx-auto">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img src="./Present Perfect continuous_files/5-full.jpg" class="img-fluid d-block mx-auto">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img src="./Present Perfect continuous_files/6-full.jpg" class="img-fluid d-block mx-auto">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./Present Perfect continuous_files/jquery-3.3.1.min.js.descarga"></script>
    <script src="./Present Perfect continuous_files/bootstrap.min.js.descarga"></script>
    <script src="./Present Perfect continuous_files/jquery.easing.min.js.descarga"></script>
    <script src="./Present Perfect continuous_files/agency.js.descarga"></script>
    <script src="./Present Perfect continuous_files/swiper.jquery.min.js.descarga"></script>
    <script src="./Present Perfect continuous_files/Simple-Slider.js.descarga"></script>
    <script id="bs-live-reload" data-sseport="64029" data-lastchange="1605309044858" src="./Present Perfect continuous_files/livereload.js.descarga"></script>


</body></html>