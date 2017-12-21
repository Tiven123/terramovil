@extends('template.admin')
@section('content')
<div class="container">
        <div class="row">

            <div class=".col-xl-4 .col-lg-4 .col-md-4 .col-sm-12 .col-xs-12">
                <!--imagen-->
                <img src="img/usuario.jpg" class="img-responsive img-rounded" alt="Responsive image">
            </div>

            <div class=".col-xl-4 .col-lg-4 .col-md-4 .col-sm-12 .col-xs-12">

                <header>
                    <!--tilulo del formulario-->
                    <h1>Register User</h1>
                </header>

                {!!Form::model($user,['route'=> ['user.update', $user->id],'method'=>'PUT'])!!}

                     <!--Campos de Cedula-->
                    <div class="form-group">                        
                        {!!Form::label('Identification:')!!}
                        {!!Form::text('identi',null,['class'=>'form-control','placeholder'=>'Identification','required'])!!}
                    </div>

                    <!--Campos de Nombre-->
                    <div class="form-group">
                        {!!Form::label('Name:')!!}
                        {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Name', 'required'])!!}
                    </div>

                    <!--Campos de Apellidos-->
                    <div class="form-group">
                        {!!Form::label('Last Name:')!!}
                        {!!Form::text('last_name',null,['class'=>'form-control', 'placeholder'=>'Last Name', 'required'])!!}
                    </div>

                   <!--Campos de Usuario-->
                    <div class="form-group">
                        {!!Form::label('User Name:')!!}
                        {!!Form::text('user_name',null,['class'=>'form-control', 'placeholder'=>'User Name', 'required'])!!}
                    </div>

                    <!--Campos de Contraseña-->
                    <div class="form-group">
                       {!!Form::label('Password:')!!}
                       {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Password', 'required'])!!}
                    </div>

                    <!--Campos de Correo-->
                    <div class="form-group">
                        {!!Form::label('Email:')!!}
                        {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Email', 'required'])!!}
                    </div>

                     <!--Campos de Direccion-->
                    <div class="form-group">
                        {!!Form::label('Adress:')!!}
                        {!!Form::text('adress',null,['class'=>'form-control', 'placeholder'=>'Adress', 'required'])!!}
                    </div>

                    <!--Campos de Celular-->
                    <div class="form-group">
                        {!!Form::label('Celphone:')!!}
                        {!!Form::text('celphone',null,['class'=>'form-control', 'placeholder'=>'Celphone', 'required'])!!}
                    </div>

                    <!--Botones-->
                    <div class="form-group">
                        <div class="text-center">
                        {!!Form::submit('Save',['class'=>'btn btn-primary'])!!}
                        </div>
                    </div>
                {!!Form::close()!!}
            </div>

            <div class=".col-xl-4 .col-lg-4 .col-md-4 .col-sm-12 .col-xs-12">
                <!--imagen-->
                <img src="img/usuario.jpg" class="img-responsive img-rounded" alt="Responsive image">
            </div>

        </div>
    </div>
@stop