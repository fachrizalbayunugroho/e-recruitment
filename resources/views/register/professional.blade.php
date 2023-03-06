@extends('layout.main')
@section('content')
<div class="container my-5">
<div class="row justify-content-center">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h1>Professional</h1>
        <p>Saat ini saya adalah seseorang dengan pengalaman kerja lebih dari 5 tahun dan memiliki keahlian tertentu</p>
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" />
            </div>
            <div class="mb-3">
                <label>No identias (KTP) <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="identity" />
            </div>
            <div class="mb-3">
                <label>Tempat lahir <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="birth_place" />
            </div>
            <div class="mb-3">
                <label>Tanggal lahir <span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="birth_date" />
            </div>
            <div class="mb-3">
                <label>Jenis kelamin <span class="text-danger">*</span></label>
            <div class="form-check">
  				<input type="radio" class="form-check-input" name="gender" value="L">Laki-laki
  				<label class="form-check-label"></label>
			</div>
			<div class="form-check">
  				<input type="radio" class="form-check-input" name="gender" value="P">Perempuan
  				<label class="form-check-label"></label>
			</div>
            <div class="mb-3">
                <label>No handphone <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="no_handphone" />
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" />
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label>Status <span class="text-danger">*</span></label>
			<div class="form-check">
  				<input class="form-check-input" type="checkbox" name="status" value="professional">
  				<label class="form-check-label">Professional</label>
			</div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection