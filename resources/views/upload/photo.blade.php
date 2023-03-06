@extends('layout.dashboard')
@section('content')
<div class="container my-5">
    <div class="col-md-6">
        <h1>Upload Foto</h1>
        <form action="{{ route('imageUpload') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label" for="inputImage">Upload Foto (extension jpg, jpeg)</label>
                    <input type="file" name="image" id="inputImage" class="form-control @error('image') is-invalid @enderror">
      
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
       
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
        </form>
        <a href="/dashboard" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection