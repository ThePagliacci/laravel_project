@extends('layouts.master')
@section('title', 'Kullanıcı')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Kullanıcı düzenle</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif
        <form action="{{ url('admin/update-user/'.$user->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Kullanıcı Adi</label><br>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"> <br>
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="">şifre</label>
                <input type="password" name="password"value="{{ $user->password }}" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="">Role_as</label>
                <br>
                <select value = "{{ $user->role_as }}" name="role_as" id="role_as">
                    <option value="0">0-User</option>
                    <option value="1">1-Admin</option>
                  </select>

            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >düzenlemeleri Kaydet</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection