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
        <h1>Fresh Graduate</h1>
        <p>Saat ini saya baru lulus kuliah dan saat ini belum memiliki pengalaman bekerja/pernah bekerja dengan pengalaman kurang dari 5 tahun</p>
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" />
            </div>
            <div class="mb-3">
                <label>No identitas (KTP) <span class="text-danger">*</span></label>
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
  				<input class="form-check-input" type="checkbox" name="status" value="fresh graduate">
  				<label class="form-check-label">Fresh Graduate</label>
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