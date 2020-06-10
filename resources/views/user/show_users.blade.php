@extends('layout')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<br>
<h1>Users Table</h1>
<br>
{{-- Table content --}}
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">User Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Opertation</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->username}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="/delete-user/{{$user->id}}" class="btn btn-md btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection 
