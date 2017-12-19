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
                <li role="presentation" class="active"><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contac</a></li>
                <li><a href="user.html">Register</a></li>
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
                            <label for="lblUser">User:</label>
                            <INPUT type=text class="form-control" id="txtUser" placeholder="User" />
                        </div>
                        <div class="form-group">
                            <!--Campos de Contraseña-->
                            <label for="lblPassword">Password:</label>
                            <input type="password" class="form-control" id="txtPassword" value="" placeholder="Password" />
                        </div>
                        <!--Boton de login-->
                        <input class="btn btn-primary" type="button" id="btnlLgin" value="Login" />
                        <br><br>
                    </form>
                </article>
                <article class="col-xs-12 col-sm-3">
                </article>
                <!--Aside con la texto-->
                <aside class="col-xs-12 col-sm-3 text-justify">
                    <p> Welcome to the official website of Terramovil Florence, thanks for visiting, yes you have it, doubt or suggestion, please to the number 24 75 52 29.
                    </p>
                </aside>
            </section>
        </div>
    </div>
    <footer>
        <!--pie de pagina-->
        <div class="container text-center">
            <p>Address: Florence center, in front of Importadora Monge, behind the bus stop.</p>
            <p>Phone Number: 2475 - 5229</p>
            <p>All rights reserved &copy; 2017</p>
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