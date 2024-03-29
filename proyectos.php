<?php
$pg = "proyectos";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
<?php include_once ("header.php") ?>;
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5 ms-3">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col 12 ms-3">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/abmclientes.png" alt="abmclientes" class="img-fluid">
                    <h2 class="p-3 d-block"> ABM Clientes </h2>
                    <p class="p-3 pb-5 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS,
                        PHP, Bootstrap y Json.</p>
                        <div class="row my-5">
                            <div class="col-12 ps-4">
                                <a href="https://github.com/Samguzman30/ambclientes" target="_blank" class="btn btnrojo">Ver códigos</a>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/abmventas.png" alt="abmclientes" class="img-fluid">
                    <h2 class="p-3 d-block"> SISTEMA DE GESTION DE VENTAS </h2>
                    <p class="p-3 pb-5 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        <div class="row my-5">
                            <div class="col-12 ps-4">
                                <a href="https://github.com/Samguzman30/php/tree/master/sistema_ventas" target="_blank" class="btn btnrojo">Ver códigos</a>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/invitados.jpg" alt="abmclientes" class="img-fluid">
                    <h2 class="p-3 d-block"> Formulario de invitados </h2>
                    <p class="p-3 pb-5 d-block">Listado realizado con PHP, HTML, CSS, en el cual solo se pueda ingresar con alguno de los numeros de documentos ya seleccionados y permita entrar a la sección VIP usando el codigo "verde".</p>
                        <div class="row my-5">
                            <div class="col-12 ps-4">
                                <a href="https://github.com/Samguzman30/Formulario-de-invitados" target="_blank" class="btn btnrojo">Ver códigos</a>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/datospersonales.jpg" alt="abmclientes" class="img-fluid">
                    <h2 class="p-3 d-block"> Formulario de datos personales </h2>
                    <p class="p-3 pb-5 d-block">Listado realizado en HTML, CSS, PHP.</p>
                        <div class="row my-5">
                            <div class="col-12 ps-4">
                                <a href="https://github.com/Samguzman30/Formulario-de-datos-personales" target="_blank" class="btn btnrojo">Ver códigos</a>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/360.jpeg" alt="abmclientes" class="img-fluid">
                    <h2 class="p-3 d-block"> Modificaciones Front-End y Base de datos </h2>
                    <p class="p-3 pb-5 d-block">Modificaciones realizadas con Wordpress en la sección contacto y 20 tips, corrección de formularios en sus tres idiomas y creación de base de datos de mails ingresados. </p>
                        <div class="row my-5">
                            <div class="col-12 ps-4">
                                <a href="https://vision360diplomacy.ch/" target="_blank" class="btn btnrojo">Ver página</a>
                            </div>
                            
                        </div>
                </div>
            </div>



        </div>

    </main>
    <footer class="container mt-10">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com"><i class="fa-brands fa-github fa-brands-pro"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in fa-brands-pro"></i></a>
            </div>
            <div class="col-12 col-sm-3 a-proyecto">Sponsor <a class="reds" href="https://depcsuite.com"> DePc Suite</a></div>
            <div class="col-12 col-sm-3 a-proyecto"><a class="reds" href="mailto:19samuelguzman@gmail.com"> 19samuelguzman@gmail.com</a></div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541140452943"><i class="fa-brands fa-whatsapp"></i></a>
    </div>

</html>