@extends('layouts.master')
@section('title', 'Mesajlar')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
        <h4>Mesaj Düzenleme</h4>
    </div>
    <div class="card-body">
          
        @if ($errors->any())
        <div class="alert alert-danger">
         @foreach ($errors->all() as $error)
         <div>{{ $error }}</div>
         @endforeach
        </div>
        @endif

        <form action="{{ url('admin/update-message/'.$message->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Mesaj:</label><br>
                <textarea type="text" name="message" class="form-control">{{ old('message', $message->message) }}</textarea>
            </div>
            <div class="mb-3">
                Kullanıcı adi:
                <select name="user_id" id="user">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id', $message->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
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