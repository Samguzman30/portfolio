<?php
$pg = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
<?php include_once ("header.php") ?>;
    <main>
        <div class="container">
    <div class="row">
        <div class="col-6 col-sm-5 mt-4">
    <h1>Sobre mi</h1>
    <p class="pb-sm-5">Apasionado por la tecnología y gestión de proyectos, queriendo ampliar mis conocimientos y poder crecer profesionalmente en esta rama del IT. Soy desarrollador web Full Stack y de Base de datos.</p>
        <a href="contacto.php" class="btn btnrojo">Enviar mensaje</a>
        </div>
        <div class="col-6 col-m-12">
            <img class="perfil" src="images/IMGSAMU.png" alt="sobre-mi">
        </div>
    </div>
    </div>
    <section class="tecnologias color-gradiente pb-5">
    <div class="container stack">
        <div class="row">
            <div class="col-12 my-sm-5 mt-5 mb-5">
                <h2>Stack tecnológico</h2>
            </div>
        </div>
        <div class="row">
            <div class=" tecno col-2 col-sm-2 text-center mt-2 pe-2 pt-5 pb-5 me-3">
        <h3>Javascript</h3>
        <img src="images/javascript.jpeg" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-2 pe-2 pt-5 pb-5 me-3">
        <h3>PHP</h3>
        <img src="images/php.jpg" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-2 pe-2 pt-5 pb-5 me-3">
        <h3>HTML5</h3>
        <img src="images/html.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-2 pe-2 pt-5 pb-5 me-3">
        <h3>React.js</h3>
        <img src="images/react.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-2 pe-2 pt-5 pb-5 me-3">
        <h3>j.Query</h3>
        <img src="images/jquery.jpg" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-2 pe-2 pt-5 pb-5">
        <h3>Boostrap</h3>
        <img src="images/boostrap.png" class="tecno-image" alt="">
            </div>
        </div>
        <div class="row">
            <div class=" tecno col-2 col-sm-2 text-center mt-4 pe-2 pt-5 pb-5 me-3">
        <h3>Laravel</h3>
        <img src="images/laravel.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-4 pe-2 pt-5 pb-5 me-3">
        <h3>MySQL</h3>
        <img src="images/mariadb.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-4 pe-2 pt-5 pb-5 me-3">
        <h3>CSS</h3>
        <img src="images/css.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-4 pe-2 pt-5 pb-5 me-3">
        <h3>Git</h3>
        <img src="images/git.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-4 pe-2 pt-5 pb-5 me-3">
        <h3>Apache</h3>
        <img src="images/Apache.png" class="tecno-image" alt="">
            </div>
            <div class=" tecno col-2 col-sm-2 text-center mt-4 pe-2 pt-5 pb-5">
        <h3>Mercadopago</h3>
        <img src="images/mercadopago.jpg" class="tecno-image" alt="">
            </div>
        </div>
    </div>
    </section>
    <section id="experiencias" class="container">
        <div class= "row">
            <div class="col-12 mt-5 mb-5">
    <h2><i class="fa-solid fa-briefcase"></i> Experiencia laboral</h2>
            </div>
        </div>
        <div class="row shadow bg-white rounded">
        <div class="row">
            <div class="col-2 ms-5 mt-7">
                <img class="logo-work img-fluid" src="images/freelancer.png" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Desarrollador de páginas web autónomo</h3>
                    <h4>Freelance</h4>
                    <h5>2021 - Presente</h5>
                    <p>Proyecto de desarrollo de sistemas web para distintos clientes. Tecnologías: PHP, CSS, HTML, jQuery, Javascript, MySQL, WSDL.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-7">
                <img class="logo-work img-fluid" src="images/freelancer.png" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Desarrollador SQL</h3>
                    <h4>Drogueria VIP</h4>
                    <h5>2018 - 2020</h5>
                    <p>Actualización de base de datos de la empresa a través del sistema HeidiSQL, control de stock en base de datos, ABM de usuarios.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-7">
                <img class="logo-work img-fluid" src="images/freelancer.png" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Mesero</h3>
                    <h4>The Little Bar</h4>
                    <h5>Mayo 2017 - Diciembre 2017</h5>
                    <p>Atencion al cliente, recepcion de mercaderia, manejo de caja.</p>
                    </div>
        </div>
        </div>

    </section>
    <section id="cursos" class="container">
    <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h2><i class="fa-solid fa-graduation-cap"></i>Cursos de desarrollo profesional</h2>
            </div>
        </div>
        <div class="row shadow bg-white rounded mb-5">
            <div class="row">
                <div class="col-2 mt-4 ms-5">
                    <img src="images/descarga.png" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-2">
                    <h3>Programación web Front-End</h3>
                    <h4>Uneweb</h4>
                    <p>Expedición: 2015-2016</p>
                    
                </div>
                <div class="col-2 mt-4 mb-2">
                    <img src="images/logo-depcsuite.svg" class="depc-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-2">
                <h3>Desarrollo web Full Stack</h3>
                    <h4>DePC Suite</h4>
                    <p>Expedición: 2022</p>
                </div>
            </div>
    </section>
    <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Avanzado C1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Leer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
</body>
</html>