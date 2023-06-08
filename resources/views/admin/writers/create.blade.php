@extends('layouts.master')
@section('title', 'Yazarlar')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Yazar Ekle</h4>
    </div>
    <div class="card-body">
          
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif


        <form action="{{ url('admin/add-writer') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label>Yazar Adi</label><br>
                    <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Fotoğraf</label>
                <input type="file" name="image" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="">Tanım</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >Yazar Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection