@extends('layouts.master')

@section('title') Users @stop

@section('content')

    <div class="col-lg-10 col-lg-offset-1">

        <h1><span class="glyphicon glyphicon-user"></span> User Details </h1>

        <div>
                <h3>Name:{{ $user->name }}</h3>
                <p>Username:{{ $user->username }}</p>
                <p>Phone Number:{{ $user->phone }}</p>
                <p>Email:{{ $user->email }}</p>
                <p>Created at:{{ $user->created_at->format('F d, Y h:ia') }}</p>
                <button><a class="btn btn-small btn-success" href="{{route('user.edit',$user->id)}}" style="margin-right: 3px;"> Edit</a></button>
                <button><a class="btn btn-small btn-danger" href="{{route('user.destroy',$user->id)}}" style="margin-right: 3px;">Delete</a></button>
        </div>
    </div>

@stop