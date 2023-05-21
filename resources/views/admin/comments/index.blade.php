@extends('layouts.master')
@section('title', 'Yorumlar')
@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h1>Yorum kategori
            <a href="{{ url('admin/add-comment') }}" class="btn btn-primary btn-sm float-end mt-2">Yorum Ekle</a>
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
                    <th>Yorum</th>
                    <th>kitap adi</th>
                    <th>oluşturuldu zaman</th>
                    <th>Düzenleme</th>
                    <th>silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                <tr>

                <td>{{ $comment->id }}</td>
                <td>{{ $comment->user->name }}</td>

                <td>{{ $comment->description }}</td>
                
                <td>{{ $comment->book->name }}</td>
                <td>{{ $comment->created_at }}</td>

                <td>
                    <a href="{{ url('admin/edit-comment/'.$comment->id) }}" class="btn btn-success">düzenleme</a>
                </td>

                <td>
                <a href="{{ url('admin/delete-comment/'.$comment->id) }}" class="btn btn-danger">silme</a>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>


@endsection