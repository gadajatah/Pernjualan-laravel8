@extends('layouts.master')
@section('title-1', 'Data Barang')

@section('content')
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> @yield('title-1') </h1>
    
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div>
            <a href="{{ route('item.create') }}" class="btn btn-primary my-3"> Tambah Barang</a>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="header">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Kadaluwarsa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $index => $item)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->satuan }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->kadaluarsa }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="/barang/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a></li>
                                <li class="list-inline-item"><a href="/barang/{{ $item->id }}/delete" class="btn btn-danger btn-sm">Hapus</a></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection