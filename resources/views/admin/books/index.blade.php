@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')


<div class="container-fluid px-4">
    <div class="card">
    <div class="card-header">
        <h1 class="mt-4">kitap kategori
            <a href="{{ url('admin/add-book') }}" class="btn btn-primary btn-sm float-end">Kitap Ekle</a>
        </h1>
    </div>
 
    <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="table table-boarded">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Kitap adi</th>
                    <th>yazar adi</th>
                    <th>foroğraf</th>
                    <th>türü adi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->writer_id }}</td>
                <td>{{ $book->image }}
                <img src="{{ asset('uploads/category'.$book->image) }}" width="50px" height="50px" alt="">
            </td>
                <td>{{ $book->genre_id }}</td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                </td>

            </tr>
                @endforeach
            </tbody>
        </div>
    </div>
    </div>

</div>


@endsection