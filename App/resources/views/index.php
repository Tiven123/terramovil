<!DOCTYPE html>
<html lang="es">

<head>
    <!--se le asigna el nombre de la pagina-->
    <title>Terramovil Florencia</title>
    <!--referencia a estilo de bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!--refencia a estilos personalizados-->
    <link rel="stylesheet" href="css/estilos.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <header>
        <div class="container">
            <!--titulo de la pagina-->
            <h1>Terramovil <small id="florencia">Florencia</small></h1>
        </div>
    </header>
    <div class="container">
        <!--se crea una barra de navegacion-->
        <nav class="nav ">
            <ul class="nav nav-tabs bg-info">
                <li role="presentation" class="active"><a href="index.html">Inicio</a></li>
                <li><a href="info.html">Quienes Somos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="usuarios.html">Registarse</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="text-center">
            <section class="main row">
                <article class="col-xs-12 col-sm-3">
                </article>
                <article class="col-xs-12 col-sm-3">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <!--Campos de Usuario-->
                            <label for="usuario">Usuario:</label>
                            <INPUT type=text class="form-control" id="usuario" placeholder="Usuario o Correo" />
                        </div>
                        <div class="form-group">
                            <!--Campos de Contraseña-->
                            <label for="contrasena">Contrase&ntilde;a:</label>
                            <input type="password" class="form-control" id="contrasenna" value="" placeholder="Contrase&ntilde;a" />
                        </div>
                        <!--Boton de login-->
                        <input class="btn btn-primary" type="button" id="boton-login" value="Ingresar" />
                        <br><br>
                    </form>
                </article>
                <article class="col-xs-12 col-sm-3">
                </article>
                <!--Aside con la texto-->
                <aside class="col-xs-12 col-sm-3 text-justify">
                    <p> Bienvenido a el sito Web oficial de Terramovil Florencia, gracias por visitarmos si tiene alguna duda o sugerencia favor comunicarse al numero 24 75 52 29.
                    </p>
                </aside>
            </section>
        </div>
    </div>
    <footer>
        <!--pie de pagina-->
        <div class="container text-center">
            <p>Direccion: Florencia centro, frente a Importadora Monge, detras de la parada de autobuses.</p>
            <p>Telefono: 2475 - 5229</p>
            <p>Derechos Reservados &copy; 2017</p>
        </div>
    </footer>

    <!--jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--scritp de bootstrap-->
    <script src="js/bootstrap.js"></script>
    <!--script de del formulario-->
    <script src="js/login.js" type="text/javascript"></script>
</body>

</html>
<!-- class="col-xs-12 col-sm-3 eso hace que sea Responsive-->