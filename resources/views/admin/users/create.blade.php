@extends('layouts.master')
@section('title', 'Kullanıcı')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Kullanıcı Ekle</h4>
    </div>
    <div class="card-body">
          
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif
        <form action="{{ url('admin/add-user') }}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
                <label>Kullanıcı Adi</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="">şifre</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="">Role_as</label>
                <br>
                <select name="role_as" id="role_as">
                    <option value="0">0-User</option>
                    <option value="1">1-Admin</option>
                  </select>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >Kullanıcı Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection