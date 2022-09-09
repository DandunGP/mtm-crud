@extends('layouts.main')

@section('container')
<form action="/{{ $usercourse->id }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="name">Nama Member</label>
        <select name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            <?php
                foreach ($member as $mem) {
            ?>
            <option value="<?= $mem->id ?>" <?php if ($mem->id == $usercourse->id){echo "selected";}?>>
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
            <option value="<?= $co->id ?>" <?php if ($co->id == $usercourse->course_id){echo "selected";}?>>
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
            <option value="<?= $me->id ?>" <?php if ($me->id == $usercourse->mentor_id){echo "selected";}?>>
                <?= $me->mentor ?>
            </option>
            <?php } ?>
        </select>
        @error('mentor')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
@endsection