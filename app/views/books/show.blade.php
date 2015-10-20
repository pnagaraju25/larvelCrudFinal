@extends('layouts.master')

@section('title') Users @stop

@section('content')

    <div class="col-lg-10 col-lg-offset-1">

        <h1><i ></i> Books Details </h1>

        <div>



            <h3>Name: {{ $books->bname }}</h3>
            <p>Username: {{ $books->bauthor }}</p>
            <p>Phone Number: {{ $books->bedition }}</p>

            <p>Uploaded at: {{ $books->created_at->format('F d, Y h:ia') }}</p>
            <button><a class="btn btn-small btn-success" href="{{route('books.edit',$books->id)}}" style="margin-right: 3px;"> Edit</a></button>

      <button><a class="btn btn-small btn-info" href="{{route('books.destroy',$books->id)}}" style="margin-right: 3px;">Delete</a></button>
 </div>



    </div>

@stop