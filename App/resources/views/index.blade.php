@extends('template.principal')
@section('content')
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
                        <input class="btn btn-primary" type="button" id="btnLogin" value="Login" />
                        <br><br>
                    </form>
                </article>
                <article class="col-xs-12 col-sm-3">
                </article>
                <!--Aside con la texto-->
                <aside class="col-xs-12 col-sm-3 text-justify">
                    <p> Welcome to the official website of Terramovil Florencia, thank you for visiting us if you have any questions or suggestions please contact the number 24 75 52 29.
                    </p>
                </aside>
            </section>
        </div>
    </div>
@stop