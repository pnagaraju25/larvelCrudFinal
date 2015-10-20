@extends('layouts.master')

@section('title') login @stop

@section('content')

<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


                @if ($errors->has())
                    @foreach ($errors->all() as $error)
                        <div >{{ $error }}</div>
                    @endforeach
                @endif


                {{ Form::open(['role' => 'form']) }}


                <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::label('username', 'Username') }}
                        {{ Form::text('username', 'talha1') }}
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password') }}
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            {{ Form::submit('Login') }}
                        </div>
                    </div>

                {{ Form::close() }}



            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@stop