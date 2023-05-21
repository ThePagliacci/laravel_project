@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h1>Yazrlar kategori
            <a href="{{ url('admin/add-writer') }}" class="btn btn-primary btn-sm float-end mt-2">Yazar Ekle</a>
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
                    <th>Yazar adi</th>
                    <th>Düzenleme</th>
                    <th>silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($writers as $writer)
                <tr>
 
                <td>{{ $writer->id }}</td>
                <td>{{ $writer->name }}</td>
                <td>
                    <a href="{{ url('admin/edit-writer/'.$writer->id) }}" class="btn btn-success">düzenleme</a>
                </td>

                <td>
                <a href="{{ url('admin/delete-writer/'.$writer->id) }}" class="btn btn-danger">silme</a>
                </td>

              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>


@endsection