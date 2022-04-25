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
    <p class="pb-sm-5">Apasionado por la tecnología y gestión de proyectos. Soy estudiante de cursos de programación Full Stack y de Base de datos.</p>
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
            <div class="col-2 ms-5 mt-5">
                <img class="logo-depc img-fluid" src="images/logo-depcsuite.svg" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Director / Founder</h3>
                    <h4>DEPCSUITE SA</h4>
                    <h5>2016 - Presente</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-5">
                <img class="logo-todocash img-fluid" src="images/todocash-vertical.svg" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Gerente de sistemas - Co-Founder</h3>
                    <h4>TodoCash</h4>
                    <h5>2021 - Presente</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-5">
                <img class="logo-uba img-fluid" src="images/uba.jpg" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Desarrollador Senior Full Stack</h3>
                    <h4>Universidad de Buenos Aires</h4>
                    <h5>ago 2015 - ene 2020</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
            <div class="row">
            <div class="col-2 ms-5 mt-4">
                <img class="logo-enacom img-fluid" src="images/enacom.jpg" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Desarrollador Senior Full Stack</h3>
                    <h4>ENACOM</h4>
                    <h5>jul 2012 - jun 2018</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-3">
                <img class="logo-enacom img-fluid" src="images/freelancer.png" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Consultor Desarrollador Freelance</h3>
                    <h4>Certificado Digital SA</h4>
                    <h5>ago 2014 - dic 2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-4">
                <img class="logo-enacom img-fluid  small" src="images/golshy.jpg" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Agencia Golshy</h4>
                    <h5>jul 2011 - dic 2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
                    <div class="row">
            <div class="col-2 ms-5 mt-5">
                <img class="logo-globons img-fluid" src="images/globons.png" alt="">
                </div>
                <div class="col-8 pt-3 mb-4">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Globons SRL</h4>
                    <h5>abr 2010 - ene 2011</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatem ipsum iure repellat sunt dicta, a provident, impedit quaerat nisi est sed cum fugiat accusamus exercitationem dolor tenetur odio magnam.</p>
                    </div>
        </div>
        </div>

    </section>
    <section id="academico" class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h2><i class="fa-solid fa-graduation-cap"></i>Formación académica</h2>
            </div>
        </div>
        <div class="row shadow bg-white rounded">
            <div class="row">
                <div class="col-2 mt-4 ms-5">
                    <img src="images/ean.jpg" class="academico-img" alt="">
                </div>
                <div class="col-4 academico-text mt-4 mb-4">
                    <h3>Licenciado en tecnologías</h3>
                    <h4>Escuela Argentina de negocios</h4>
                    <h5>2015-2020</h5>
                    <h6>http://www.ean.edu.ar/</h6>
                </div>
                <div class="col-2 mt-4 mb-4">
                    <img src="images/unlam.png" class="academico-img" alt="">
                </div>
                <div class="col-4 academico-text mt-4 mb-4">
                <h3>Ingeniería en Informática</h3>
                    <h4>Universidad Nacional de La Matanza</h4>
                    <h5>2006-2010</h5>
                    <h6>http://unlam.edu.ar</h6>
                </div>
            </div>
            <div class="row">
            <div class="col-2 mt-4 ms-5">
                    <img src="images/freelancer.png" class="academico-parroquial" alt="">
                </div>
                <div class="col-4 academico-text mt-4 mb-4">
                    <h3>Técnico en Informática</h3>
                    <h4>EColegio Parroquial San Juan XXIII</h4>
                    <h5>2003-2005</h5>
                    <h6>http://colparroquialjuan23.edu.ar</h6>
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
                    <img src="images/utn.jpg" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-2">
                    <h3>Programa Ejecutivo en Project Management</h3>
                    <h4>Universidad Tecnológica Nacional</h4>
                    <p>Expedición: may 2018</p>
                    
                </div>
                <div class="col-2 mt-4 mb-2">
                    <img src="images/ean.jpg" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-2">
                <h3>Diplomatura en Marketing</h3>
                    <h4>Escuela Argentina de Negocios</h4>
                    <p>Expedición: dic 2017</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 mt-4 ms-5">
                    <img src="images/fundacion-impulsar.png" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-4">
                    <h3>Capacitación en Planes de Negocio</h3>
                    <h4>Fundación Impulsar</h4>
                    <p>Expedición: may 2018</p>
                    
                </div>
                <div class="col-2 mt-4 mb-4">
                    <img src="images/unlam.png" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-4">
                <h3>Programación Web ASP.NET</h3>
                    <h4>Universidad de La Matanza</h4>
                    <p>Expedición: dic 2019</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 mt-4 ms-5">
                    <img src="images/microsoft.jpg" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-4">
                    <h3>Programación C# .NET</h3>
                    <h4>Microsoft</h4>
                    <p>Expedición: dic 2006</p>
                    
                </div>
                <div class="col-2 mt-4 mb-4">
                    <img src="images/freelancer.png" class="cursos-img" alt="">
                </div>
                <div class="col-4 cursos-text mt-4 mb-4">
                <h3>English Intermediate B2</h3>
                    <h4>Instituto John Milton de Cultura Inglesa</h4>
                    <p>Expedición: dic 2006</p>
                </div>
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