@extends('layout.dashboard')
@section('content')
<div class="container my-5">
    <div class="col-md-6">
        <h1>Edit Data</h1>
        <form action="{{ route('edit.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}"/>
            </div>
            <div class="mb-3">
                <label>No identitas (KTP) <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="identity" value="{{Auth::user()->identity}}"/>
            </div>
            <div class="mb-3">
                <label>Tempat lahir <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="birth_place" value="{{Auth::user()->birth_place}}"/>
            </div>
            <div class="mb-3">
                <label>Tanggal lahir <span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="birth_date" value="{{Auth::user()->birth_date}}"/>
            </div>
            <div class="mb-3">
                <label>Jenis kelamin <span class="text-danger">*</span></label>
            <div class="form-check">
  				<input type="radio" class="form-check-input" name="gender" value="L" @if(Auth::user()->gender == "L") checked @endif> Laki-laki
  				<label class="form-check-label"></label>
			</div>
			<div class="form-check">
  				<input type="radio" class="form-check-input" name="gender" value="P" @if(Auth::user()->gender == "P") checked @endif> Perempuan
  				<label class="form-check-label"></label>
			</div>
            <div class="mb-3">
                <label>No handphone <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="no_handphone" value="{{Auth::user()->no_handphone}}"/>
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}"/>
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" value="{{Auth::user()->username}}"/>
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password"/>
            </div>
            <p>(Silahkan diisi jika ingin mengubah password)</p>
            <div class="mb-3">
                <button class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection