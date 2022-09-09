@extends('layouts.main')

@section('container')
<a href="/add"><button class="btn-success rounded px-5 mb-3">Tambah Data</button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID Member</th>
            <th scope="col">Nama Member</th>
            <th scope="col">ID Course</th>
            <th scope="col">Course</th>
            <th scope="col">ID Mentor</th>
            <th scope="col">Mentor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $mem)
        <tr>
            <td> {{ $mem->member_id }}</td>
            <td> {{ $mem->member_name }}</td>
            <td> {{ $mem->course_id }}</td>
            <td> {{ $mem->course }}</td>
            <td> {{ $mem->mentor_id}}</td>
            <td> {{ $mem->mentor}}</td>
            <td><a href="/edit/{{ $mem->id }}"><button class="btn btn-primary w-50">Edit</button></a>
                <form action="/{{ $mem->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger w-50 mt-1" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection