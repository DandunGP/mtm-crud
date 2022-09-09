@extends('layouts.main')

@section('container')
<form action="/member" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Member</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
            placeholder="Nama Member">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>
@endsection