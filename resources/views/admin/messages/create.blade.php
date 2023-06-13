@extends('layouts.master')
@section('title', 'Mesajlar')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Mesaj Ekle</h4>
    </div>
    <div class="card-body">
          
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif

        <form action="{{ url('admin/add-message') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label>Mesaj:</label><br>
                    <textarea type="text" name="message" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                Kullanıcı adi:
                <select name="user_id" id="user">
                    @foreach ($users as $user)
                    <option value="{{ $user->id ?? '' }}">{{ $user->name ?? '' }}</option>

                @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >Mesaj Kaydet</button>
            </div>

        </form>
    </div>
</div>
</div>


@endsection