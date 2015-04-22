@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New User</div>

                    <div class="panel-body">

                        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST'])!!}

                        <div class="form-group">

                            {!! Form::label('Email','Correo Electronico')!!}
                            {!! Form::text('email', null, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('password','Contraseña')!!}
                            {!! Form::text('password', null, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('first_name','Primer Nombre')!!}
                            {!! Form::text('first_name', null, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('last_name','Apellidos')!!}
                            {!! Form::text('last_name', null, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('type','Tipo de Usuario')!!}
                            {!! Form::select('type', ['' => 'Seleccione el tipo','user' => 'Usuario', 'admin' => 'Administrador'],['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">

                            {!! Form::submit('Add User', ['class' => 'btn btn-primary form-control']) !!}
                        </div>



                        {!! Form::close()!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection