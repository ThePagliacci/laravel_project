@extends('layouts.master')
@section('title', 'Mesajlar')
@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h1>Mesaj kategori
            <a href="{{ url('admin/add-message') }}" class="btn btn-primary btn-sm float-end mt-2">Mesaj Ekle</a>
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
                    <th>Kullanıcı Adi</th>
                    <th>Mesaj</th>
                    <th>oluşturuldu zaman</th>
                    <th>Düzenleme</th>
                    <th>silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>

                <td>{{ $message->id }}</td>
                <td>{{ $message->user->id }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at }}</td>

                <td>
                    <a href="{{ url('admin/edit-message/'.$message->id) }}" class="btn btn-success">düzenleme</a>
                </td>

                <td>
                <a href="{{ url('admin/delete-message/'.$message->id) }}" class="btn btn-danger">silme</a>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection