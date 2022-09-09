@extends('layouts.main')

@section('container')
<form action="/member/{{ $member->id }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="nama">Nama Member</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
            value="{{ $member->nama }}" name="nama">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
@endsection