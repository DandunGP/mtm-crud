@extends('layouts.main')

@section('container')
<a href="member/add"><button class="btn-success rounded px-5 mb-3">Tambah Data</button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $mem)
        <tr>
            <td> {{ $mem->id }}</td>
            <td> {{ $mem->nama }}</td>
            <td><a href="member/edit/{{ $mem->id }}"><button class="btn btn-primary w-50">Edit</button></a>
                <form action="member/{{ $mem->id }}" method="post">
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