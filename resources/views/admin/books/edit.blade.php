@extends('layouts.master')
@section('title', 'Kitap')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Kitap düzenle</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif

        <form action="{{ url('admin/update-book/'.$book->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Kitap Adi</label>
                <input type="text" name="name" value="{{ $book->name }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Tanım</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description', $book->description)}}</textarea>
            </div>

            <div class="mb-3">
                <label for="">Fotoğraf</label>
                <input type="file" name="image" class="form-control"/>
            </div>

            <div class="mb-3">
                <label>yazar Adi</label><br>

                <select name="writer_id" id="writer_id">
                    @foreach ($writers as $writer)
                    <option value="{{ $writer->id ?? '' }}"{{ old('writer', $writer->id ) == $book->writer_id ? 'selected' : '' }}  >{{ $writer->name ?? '' }}</option>
                    @endforeach
                </select> <br>

            </div>
            <div class="mb-3">
                <label>türü Adi</label><br>
                <select name="genre_id" id="genre_id">
                    @foreach ($bookGenres as $bookGenre)
                    <option value="{{ $bookGenre->id ?? '' }}" {{ old('bookgenre', $bookGenre->id ) == $book->genre_id ? 'selected' : '' }} >{{ $bookGenre->name ?? '' }}</option>
                    @endforeach
                </select> <br>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >düzenlemeleri Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection