@extends('layouts.master')
@section('title', 'Kitap türü')
@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h1>kitap tüleri kategori
            <a href="{{ url('admin/add-genre') }}" class="btn btn-primary btn-sm float-end mt-2">tür Ekle</a>
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
                    <th>türü adi</th>
                    <th>Düzenleme</th>
                    <th>silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookGenres as $genre)
                <tr>

                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td>
                    <a href="{{ url('admin/edit-genre/'.$genre->id) }}" class="btn btn-success">düzenleme</a>
                </td>

                <td>
                <a href="{{ url('admin/delete-genre/'.$genre->id) }}" class="btn btn-danger">silme</a>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>


@endsection