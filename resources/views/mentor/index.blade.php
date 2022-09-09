@extends('layouts.main')

@section('container')
<a href="mentor/add"><button class="btn-success rounded px-5 mb-3">Tambah Data</button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Mentor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mentors as $men)
        <tr>
            <td> {{ $men->id }}</td>
            <td> {{ $men->mentor }}</td>
            <td><a href="mentor/edit/{{ $men->id }}"><button class="btn btn-primary w-50">Edit</button></a>
                <form action="mentor/{{ $men->id }}" method="post">
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