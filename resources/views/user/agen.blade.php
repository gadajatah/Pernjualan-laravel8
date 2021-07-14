@extends('layouts.master')
@section('title-1', 'Data Agen')

@section('content')
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> @yield('title-1') </h1>
    
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Agen</th>
                        <th>Email</th>
                        <th>Di Buat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agens as $index => $agen)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $agen->name }}</td>
                        <td>{{ $agen->email }}</td>
                        <td>{{ $agen->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection