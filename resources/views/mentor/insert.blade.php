@extends('layouts.main')

@section('container')
<form action="/mentor" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="mentor">Nama Mentor</label>
        <input type="text" class="form-control @error('mentor') is-invalid @enderror" id="mentor" name="mentor"
            placeholder="Nama Mentor">
        @error('mentor')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>
@endsection