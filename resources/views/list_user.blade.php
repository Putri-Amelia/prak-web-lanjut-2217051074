@extends('layouts.app')

@section('content')
<style>
    body {
    background-image: url('https://img.freepik.com/free-photo/pink-nature-landscape-with-vegetation_23-2150859595.jpg?t=st=1728042027~exp=1728045627~hmac=d405f5a8cc5aa7b89c80f9c16ae1049aef42bd4a39685d444883e6bba7ec7ee9&w=1480'); 
    background-size: cover; 
    background-position: center; 
    background-attachment: fixed;                                                                                           
    margin: 0; 
    padding: 0;
    }

    .add-user-container {
        text-align: center; 
        margin-bottom: 20px; 
        margin-left: 20px;
        margin-top: 50px; 
    }

    .table {
        width: 80%; 
        margin: 20px auto; 
        background-color: #ffdfdf;
        border-radius: 8px;
        border-spacing: 0;
        overflow: hidden;
        text-align: left;
        margin-top: 20px; 
    }

    .table thead {
        background-color: #fb929e; 
        color: white;
    }

    .table th, 
    .table td {
        padding: 12px 15px;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f7ff; 
    }

    .table tbody tr:hover {
        background-color: #dde6ff; 
    }

    .table tbody td {
        border-bottom: 1px solid #e0e0e0; 
    }

    .table tbody tr:last-child td {
        border-bottom: none; 
    }

    .btn-success {
        background-color: #aedefc; 
        border-color: #aedefc; 
        border-radius: 5px; 
        padding: 10px 15px; 
        font-size: 16px; 
        transition: background-color 0.3s; 
    }

    .btn-success:hover {
        background-color: #218838; 
        border-color: #1e7e34; 
    }

</style>

<div class="add-user-container">
    <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['nama'] }}</td>
            <td>{{ $user['npm'] }}</td>
            <td>{{ $user['nama_kelas'] }}</td>
            <td><img src="{{asset('upload/img/'. $user->foto)}}" alt="Foto User" width="100"></td>
            <td>
                <a href="{{route('users.show', $user->id) }}" class=btn btn-warning mb-3>Detail</a>

                <a class="btn delete" href="#">
                <i class="fas fa-trash"></i> Delete </a>

                <a class="btn edit" href="#">
                <i class="fas fa-edit"></i> Edit </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection