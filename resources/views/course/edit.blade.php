@extends('layouts.main')

@section('container')
<form action="/course/{{ $course->id }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="course">Nama Course</label>
        <input type="text" class="form-control @error('course') is-invalid @enderror" id="course"
            value="{{ $course->course }}" name="course">
        @error('course')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
@endsection