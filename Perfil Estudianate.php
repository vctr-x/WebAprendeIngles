<?php
    $conectar = include 'Conexion.php';
    
    $usuario = include 'usuario.php';

    $sql= "SELECT * FROM tbl_estudiante WHERE ID_Estudiante = $usuario";
    
    $ejecutar= mysqli_query($conectar, $sql);

    if(!$ejecutar){
        header("location:Error.html");
    }else{
        while($row = $ejecutar->fetch_array()){
            $ID = $row['ID_Estudiante'];
            $Nombre = $row['Nombre_Est'];
            $Apellido = $row['Apellidos_Est'];
            $Nivel = $row['Nivel_Est'];
            $Grado = $row['Grado'];
            $Email = $row['Email_Est'];
        }
    }
?>

<!DOCTYPE html>
<!-- saved from url=(0025)http://192.168.1.13:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="./Mi perfil_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Mi perfil_files/css">
    <link rel="stylesheet" href="./Mi perfil_files/css(1)">
    <link rel="stylesheet" href="./Mi perfil_files/css(2)">
    <link rel="stylesheet" href="./Mi perfil_files/css(3)">
    <link rel="stylesheet" href="./Mi perfil_files/font-awesome.min.css">
    <link rel="stylesheet" href="./Mi perfil_files/ionicons.min.css">
    <link rel="stylesheet" href="./Mi perfil_files/Article-List.css">
    <link rel="stylesheet" href="./Mi perfil_files/Features-Boxed.css">
    <link rel="stylesheet" href="./Mi perfil_files/Highlight-Blue.css">
    <link rel="stylesheet" href="./Mi perfil_files/animate.min.css">
    <link rel="stylesheet" href="./Mi perfil_files/aos.css">
    <link rel="stylesheet" href="./Mi perfil_files/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="./Mi perfil_files/Login-Form-Clean.css">
    <link rel="stylesheet" href="./Mi perfil_files/Login-Form-Dark.css">
    <link rel="stylesheet" href="./Mi perfil_files/Navigation-Clean.css">
    <link rel="stylesheet" href="./Mi perfil_files/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./Mi perfil_files/Team-Boxed.css">
<style>.text{text-align: center;}._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{-webkit-animation:n0BD1--rotation 3.5s linear forwards;animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style></head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div class="register-photo">
        <div class="form-container">
            <form>
                <h2 class="text-center">Mi Perfil</h2>
                <div class="form-group">
                    <b class="form-control text"> ID :  <?php echo $ID?> </b>
                </div>
                <div class="form-group">
                    <b class="form-control text"> Nombre :  <?php echo $Nombre?> </b>
                </div>
                <div class="form-group">
                    <b class="form-control text"> Apellido :  <?php echo $Apellido?> </b>
                </div>
                <div class="form-group">
                    <b class="form-control text"> Nivel :  <?php echo $Nivel?> </b>
                </div>
                <div class="form-group">
                    <b class="form-control text"> Grado :  <?php echo $Grado?> </b>
                </div>
                <div class="form-group">
                    <b class="form-control text"> Email :  <?php echo $Email?> </b>
                </div>
                
                <div class="form-group">
                    <a class="btn btn-primary btn-block" role="button" href="Niveles.php">Volver</a>
                </div>
            </form>
        </div>
    </div>
    <script src="./Mi perfil_files/jquery-3.3.1.min.js.descarga"></script>
    <script src="./Mi perfil_files/bootstrap.min.js.descarga"></script>
    <script src="./Mi perfil_files/smart-forms.min.js.descarga"></script>
    <script src="./Mi perfil_files/jquery.easing.min.js.descarga"></script>
    <script src="./Mi perfil_files/agency.js.descarga"></script>
    <script src="./Mi perfil_files/bs-animation.js.descarga"></script>
    <script src="./Mi perfil_files/aos.js.descarga"></script>
    <script id="bs-live-reload" data-sseport="56956" data-lastchange="1602818201683" src="./Mi perfil_files/livereload.js.descarga"></script>


</body>
</html>