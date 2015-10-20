@extends('layouts.master')

@section('title') Users @stop

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i ></i> User Administration </h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>

                    <th>Phone</th>

                    <th>Email</th>

                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
            <!-- //here $user came from controller and it use here as $users -->
            @if($user->count())
                @foreach ($user as $users)

                    <td>{{ $users->name }}</td>


                    <td>{{ $users->phone }}</td>

                    <td>{{ $users->email }}</td>

                    <td><a href="{{ route('user.show',$users->id) }}"  style="margin-right: 3px;">Show</a></td>
                    <td><a class="btn btn-small btn-success" href="{{route('user.edit',$users->id)}}"  style="margin-right: 3px;">Edit</a></td>
                    <td><a class="btn btn-small btn-danger" href="{{route('user.destroy',$users->id)}}"  style="margin-right: 3px;">Delete</a></td>
                </tr>
                @endforeach
                @else
               <h1> There is no Users</h1>
                @endif

            </tbody>

        </table>
    </div>

    <td><a class="btn btn-small btn-info" href="{{route('user.create')}}"  style="margin-right: 3px;">Add User</a></td>

</div>

@stop