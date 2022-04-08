<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.html">Sobre Mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 active" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btnrojo">Descargar mi CV <i class="fa-solid fa-file-arrow-down"></i></a>
                    </div>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <P>Te invito que me contactes enviandome un mensaje o bien por Whatsapp </P>
            </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class= form-control>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class= form-control>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTexto-Whatsapp" id="txtTexto-Whatsapp" placeholder="Texto/Whatsapp" class= form-control>
                    </div>
                    <div class="mb-3">
                    <textarea name="txtMensaje" id="txtMensaje" class="form-control" placeholder="Escribe aqui tu mensaje"></textarea>
                </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btnblanco">ENVIAR</button> 
                    </div>
                    </form>
        </div>
    </div>
    </main>
    <footer class="container mt-10">
        <div class="row">
            <div class="col-3">
                <a href="https://github.com"><i class="fa-brands fa-brands-con fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-brands-con fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">Sponsor <a href="https://depcsuite.com"> DePc Suite</a></div>
            <div class="col-3"><a href="mailto:19samuelguzman@gmail.com"> 19samuelguzman@gmail.com</a></div>

        </div>

    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541140452943"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>