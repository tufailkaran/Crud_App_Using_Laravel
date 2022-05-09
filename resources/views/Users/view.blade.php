@extends('mytemp')
@section('title', 'view')
@section('mainarea')

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <td>User Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>

    </thead>
    <tbody>
        @foreach($data as $dt)
        <tr>
            <td>{{$dt['id']}}</td>
            <td>{{$dt['name']}}</td>
            <td>{{$dt['email']}}</td>
            <td>{{$dt['phone']}}</td>
            <td><a href="/allUsers/update/{{$dt['id']}}" class="btn btn-primary">Update</a>
            <a href="/allUsers/delete/{{$dt['id']}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection