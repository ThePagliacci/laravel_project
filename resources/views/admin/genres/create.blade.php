@extends('layouts.master')
@section('title', 'Kitap türleri')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Kitap türü Ekle</h4>
    </div>
    <div class="card-body">
          
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif


        <form action="{{ url('admin/add-genre') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label>türü Adi</label><br>
                    <input type="text" name="name" class="form-control">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >Kitap türü Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection