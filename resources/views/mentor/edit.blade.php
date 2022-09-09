@extends('layouts.main')

@section('container')
<form action="/mentor/{{ $mentor->id }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="mentor">Nama Mentor</label>
        <input type="text" class="form-control @error('mentor') is-invalid @enderror" id="mentor"
            value="{{ $mentor->mentor }}" name="mentor">
        @error('mentor')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
@endsection