@extends('layouts.master')
@section('title', 'Kullanıcılar')
@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h1>Kullanıcı kategori
            <a href="{{ url('admin/add-user') }}" class="btn btn-primary btn-sm float-end mt-2">Kullanıcı Ekle</a>
        </h1>
    </div>
     
    <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Kullanıcı adi</th>
                    <th>email</th>
                    <th>şifre</th>
                    <th>Fotoğraf</th>
                    <th>role_as</th>
                    <th>Düzenleme</th>
                    <th>silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>

                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>
                
                <td>{{ $user->password }}</td>
                <td>
                    <img src="../uploads/category/{{ $user->image }}" width="50px" height="50px" alt="">
                </td>   
                <td>{{ $user->role_as }}</td>

                <td>
                    <a href="{{ url('admin/edit-user/'.$user->id) }}" class="btn btn-success">düzenleme</a>
                </td>

                <td>
                <a href="{{ url('admin/delete-user/'.$user->id) }}" class="btn btn-danger">silme</a>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>
@endsection