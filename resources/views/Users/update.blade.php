@extends('mytemp')
@section('title', 'Update User')
@section('mainarea')
<h1 class="text-center">Update User</h1>
<form method="POST" action="/allUsers/update">
    @csrf()
    <input type="text" name="id" value="{{$data['id']}}" hidden>
    <input type="text" name="name" placeholder="Name" value="{{$data['name']}}" class="form-control"><br>
    <input type="email" name="email" placeholder="Email" value="{{$data['email']}}" class="form-control"><br>
    <input type="text" name="phone" placeholder="phone" value="{{$data['phone']}}" class="form-control"><br>
    <input type="submit" name="updateUser" value="Update User" class="btn btn-primary">
</form>
@endsection