@extends('layouts.main')

@section('container')
<form action="/course" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="course">Nama Course</label>
        <input type="text" class="form-control @error('course') is-invalid @enderror" id="course" name="course"
            placeholder="Nama Course">
        @error('course')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>
@endsection