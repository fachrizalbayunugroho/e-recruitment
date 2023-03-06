@extends('layout.main')

@section('content')

<div class="container my-5">
<div class="row justify-content-center">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h1>Login (HRD)</h1>
		<form action="{{ route('login2.action') }}" method="POST">
            @csrf
            <div class="mb-3 col-6">
                <label>Username<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" />
            </div>
            <div class="mb-3 col-6">
                <label>Password<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection