<!DOCTYPE html>
<html lang="es">

<head>
    <!--se le asigna el nombre de la pagina-->
    <title>Terramovil Florencia</title>
    <!--referencia a estilo de bootstrap-->
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/bootstrap-theme.css')!!}
    {!!Html::style('css/estilos.csss')!!}
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
                <li><a href="contact.html">Products</a></li>
                <li><a href="user.html">Repair</a></li>
                <li><a href="index.html">Quotation</a></li>
                <li><a href="contact.html">Logout</a></li>
            </ul>
        </nav>
    </div> 

        @yield('content')

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