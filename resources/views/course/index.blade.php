@extends('layouts.main')

@section('container')
<a href="course/add"><button class="btn-success rounded px-5 mb-3">Tambah Data</button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Course</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $co)
        <tr>
            <td> {{ $co->id }}</td>
            <td> {{ $co->course }}</td>
            <td><a href="course/edit/{{ $co->id }}"><button class="btn btn-primary w-50">Edit</button></a>
                <form action="course/{{ $co->id }}" method="post">
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