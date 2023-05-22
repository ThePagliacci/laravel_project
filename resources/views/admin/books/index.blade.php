@extends('layouts.master')
@section('title', 'Kitaplar')
@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h1>kitap kategori
            <a href="{{ url('admin/add-book') }}" class="btn btn-primary btn-sm float-end mt-2">Kitap Ekle</a>
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
                    <th>Kitap adi</th>
                    <th>yazar adi</th>
                    <th>foroğraf</th>
                    <th>türü adi</th>
                    <th>Düzenleme</th>
                    <th>silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>

                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>

                <td>{{ $book->writer->name }}</td>
                
                <td>
                    <img src="../uploads/category/{{ $book->image }}" width="50px" height="50px" alt="">
                </td>
   
                <td>{{ $book->bookGenre->name }}</td>

                <td>
                    <a href="{{ url('admin/edit-book/'.$book->id) }}" class="btn btn-success">düzenleme</a>
                </td>

                <td>
                <a href="{{ url('admin/delete-book/'.$book->id) }}" class="btn btn-danger">silme</a>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>
@endsection