@extends('layouts.master')

@section('title')Books @stop

@section('content')

    <div class="col-lg-10 col-lg-offset-1">

        <h1><span class="glyphicon glyphicon-folder-open"></span>  Books Collection</h1>
        <div class="table-responsive">
      <table class="table table-bordered table-striped">


             <thead>
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Uploaded at</th>
                    <th>Book URL</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
             </thead>


          <tbody>
                          @foreach ($books as $book)
                          <tr>
                              <td>{{ $book->bname }}</td>
                              <td>{{ $book->bauthor }}</td>
                              <td>{{ $book->bedition }}</td>
                              <td>{{ $book->created_at->format('Y-m-d') }}</td>
                              <td><a href="{{$book->p_url}}">Book-url</a></td>
                              <td><a href="{{route('books.show',$book->id)}}"  style="margin-right: 3px;">Details</a></td>
                              <td><a class="btn btn-small btn-success" href="{{route('books.edit',$book->id)}}"  style="margin-right: 3px;">Edit</a></td>
                              <td><a class="btn btn-small btn-danger" href="{{route('books.destroy',$book->id)}}"  style="margin-right: 3px;">Delete</a></td>
                          </tr>

                          @endforeach
          </tbody>


     <table/>



        <td><a class="btn btn-small btn-info" href="{{route('books.create')}}"  style="margin-right: 3px;">Add Books</a></td>

        </div>
@stop