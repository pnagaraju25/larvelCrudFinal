@extends('layouts.madam')

@section('title') Update Book @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

@if ($errors->has())
        @foreach ($errors->all() as $error)
            <div >{{ $error }}</div>
        @endforeach
    @endif

    <h1> Update Book Info</h1>
    {{ Form::model($books, ['role' => 'form', 'route' => ['books.update', $books->id], 'method' => 'PUT']) }}



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
        {{ Form::label('p_url', 'Book Url') }}
        {{ Form::text('p_url') }}
    </div>

    <div class='form-group'>
          {{ Form::submit('Update' ,array('class'=>'btn btn-small btn-success')) }}
    </div>



    {{ Form::close() }}

</div>

@stop