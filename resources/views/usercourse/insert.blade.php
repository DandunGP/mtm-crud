@extends('layouts.main')

@section('container')
<form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nama Member</label>
        <select name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            <?php
                foreach ($member as $mem) {
                ?>
            <option value="<?= $mem->id ?>">
                <?= $mem->nama ?>
            </option>
            <?php } ?>
        </select>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="course">Course</label>
        <select name="course" id="course" class="form-control @error('course') is-invalid @enderror">
            <?php
                foreach ($course as $co) {
                ?>
            <option value="<?= $co->id ?>">
                <?= $co->course ?>
            </option>
            <?php } ?>
        </select>
        @error('course')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="mentor">Mentor</label>
        <select name="mentor" id="mentor" class="form-control @error('mentor') is-invalid @enderror">
            <?php
                foreach ($mentor as $me) {
                ?>
            <option value="<?= $me->id ?>">
                <?= $me->mentor ?>
            </option>
            <?php } ?>
        </select>
        @error('mentor')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>
@endsection