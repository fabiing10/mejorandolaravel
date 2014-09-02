@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Ultimos candidatos</h1>
        <div class="row">
            <div class="col-md-6">
                <h1>Sign Up</h1>
                {{ Form::open(['route'=>'register', 'method'=>'POST', 'role'=>'form' ]) }}

                    <div class="form-group">
                        {{ Form::label('full_name', 'Nombre Completo') }}
                        {{ Form::text('full_name', null ,['class'=>'form-control']) }}
                        {{ $errors->first('full_name','<p class="error_message" style="color:red">:message </p>') }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Correo') }}
                        {{ Form::email('email', null ,['class'=>'form-control']) }}
                        {{ $errors->first('email','<p class="error_message" style="color:red">:message </p>') }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Clave') }}
                        {{ Form::password('password' ,['class'=>'form-control']) }}
                        {{ $errors->first('password','<p class="error_message" style="color:red">:message </p>') }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password_confirmation', 'Nombre Completo') }}
                        {{ Form::password('password_confirmation',['class'=>'form-control']) }}
                        {{ $errors->first('password_confirmation','<p class="error_message" style="color:red">:message </p>') }}
                    </div>


                <p>
                    <input type="submit" value="Register" class="btn btn-success">
                </p>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
