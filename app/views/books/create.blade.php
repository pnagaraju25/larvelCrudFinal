@extends('layouts.master')

@section('title') Add Book @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>



    <h1> Add Book</h1>

    {{ Form::open( ['role' => 'form', 'route' => ['books.store']]) }}



    <div class='form-group'>
        {{ Form::label('bname', ' Name') }}
        {{ Form::text('bname') }}
    </div>

    <div class='form-group'>
        {{ Form::label('bauthor', 'Author') }}
        {{ Form::text('bauthor') }}
    </div>

    <div class='form-group'>
        {{ Form::label('bedition', 'Edition') }}
        {{ Form::text('bedition') }}
    </div>

    <div class='form-group'>
          {{ Form::submit('Add Book',array('class'=>'btn btn-small btn-success')) }}
    </div>



    {{ Form::close() }}

</div>

@stop