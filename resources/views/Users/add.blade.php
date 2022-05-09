@extends('mytemp')
@section('title', 'Add User')
@section('mainarea')
<h1 class="text-center bg-black">Add User</h1>
<form method="POST" class="form-block" action="/allUsers/add">
    @csrf()
    <input type="text" name="name" placeholder="Name" class="form-control"><br>
    <input type="email" name="email" placeholder="Email" class="form-control"><br>
    <input type="text" name="phone" placeholder="phone" class="form-control mb-2"><br>
    <input type="submit" name="addUser" class="btn btn-primary " value="Add User">
</form>
@endsection