@extends('layouts.master')
@section('title', 'Kitap')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Kitap Ekle</h4>
    </div>
    <div class="card-body">
          
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif


        <form action="{{ url('admin/add-book') }}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
                <label>Kitap Adi</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Tanım</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="">Fotoğraf</label>
                <input type="file" name="image" class="form-control"/>
            </div>

            <div class="mb-3">
                <label>yazar Adi</label><br>

                <select name="writer_id" id="writer_id">
                    @foreach ($writers as $writer)
                    <option value="{{ $writer->id ?? '' }}">{{ $writer->name ?? '' }}</option>
                    @endforeach
                </select> <br>

            </div>
            <div class="mb-3">
                <label>türü Adi</label><br>

                <select name="genre_id" id="genre_id">
                    @foreach ($bookGenres as $bookGenre)
                    <option value="{{ $bookGenre->id ?? '' }}">{{ $bookGenre->name ?? '' }}</option>
                    @endforeach
                </select> <br>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >Kitap Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection