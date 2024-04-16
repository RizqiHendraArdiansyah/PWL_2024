@extends('layout.template')
@section('content')
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title">{{ $page->title }}</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    @empty($user)
    <div class="alert alert-danger alert-dismissible">
      <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
      Data yang Anda cari tidak ditemukan.
    </div>
    <a href="{{ url('user') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    @else
    <form method="POST" action="{{ url('/welcome/'.$user->user_id) }}" class="form-horizontal">
      @csrf
      {!! method_field('PUT') !!}
      <!-- menambahkan baris untuk melakukan proses edit yang butuh method PUT -->
      <div class="form-group row">
        <label class="col-1 control-label col-form-label">Username</label>
        <div class="col-11">
          <input type="text" class="form-control" id="username" name="username"
            value="{{ old('username', $user->username) }}" required>
          @error('username')
          <small class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1 control-label col-form-label">Nama</label>
        <div class="col-11">
          <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required>
          @error('nama')
          <small class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1 control-label col-form-label">Password</label>
        <div class="col-11">
          <input type="password" class="form-control" id="password" name="password">
          @error('password')
          <small class="form-text text-danger">{{ $message }}</small>
          @else
          <small class="form-text text-muted">Abaikan (jangan diisi) jika
            tidak ingin mengganti password user.</small>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1 control-label col-form-label">Status</label>
        <div class="col-11">
          <select class="form-control" id="level_id" name="status" required>
            <option value="">- Pilih Status -</option>
              <option value="0" @if($user->status == 0) 
                selected @endif>Unvalidate</option> 
              <option value="1" @if($user->status == 1) 
                selected @endif>Validate</option> 
          </select>
          @error('level_id')
          <small class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1 control-label col-form-label"></label>
        <div class="col-11">
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
          <a class="btn btn-sm btn-default ml-1" href="{{ url('welcome')     
}}">Kembali</a>
        </div>
      </div>
    </form>
    @endempty
  </div>
</div>
@endsection
@push('css')
@endpush
@push('js')
@endpush