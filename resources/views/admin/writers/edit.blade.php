@extends('layouts.master')
@section('title', 'Yazar')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Yazar düzenle</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif

        <form action="{{ url('admin/update-writer/'.$writer->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Yazar Adi</label><br>
                    <input type="text" name="name" value="{{ $writer->name }}" class="form-control"> <br>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >düzenlemeleri Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection