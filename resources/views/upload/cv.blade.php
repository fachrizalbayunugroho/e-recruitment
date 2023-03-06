@extends('layout.dashboard')
@section('content')
<div class="container my-5">
    <div class="col-md-6">
        <h1>Upload CV</h1>
        <form action="{{ route('fileUpload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}"/>
            </div>
            <div class="mb-3">
                <label>Posisi yang dilamar <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="apply"/>
            </div>
            <div class="mb-3">
            <b>Upload CV (extension pdf)<span class="text-danger">*</span></b>
            <div class="input-group custom-file-button">
                <input type="file" name="file" class="form-control">
                <label class="input-group-text"></label>
            </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary">Upload</button>
            </div>
        </form>
        <a href="/dashboard" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection