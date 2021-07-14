@extends('layouts.master')
@section('title-1', 'Tambah Data Barang')

@section('content')
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> @yield('title-1') </h1>
    
</div>
<div class="card shadow mb-4">
    <div class="container my-5">
        <form action="" method="post">
            @csrf
            @method('patch')
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="nama" class="form-control" name="nama"" value="{{ $item->nama }}">
              </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                  <input type="satuan" class="form-control" name="satuan" value="{{ $item->satuan }}">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                  <input type="harga" class="form-control" name="harga" value="{{ $item->harga }}">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Kadaluwarsa</label>
                <div class="col-sm-10">
                  <input type="kadaluarsa" class="form-control" name="kadaluarsa" value="{{ $item->kadaluarsa }}">
                </div>
              </div>
              <div class="row">
                <div class="col">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
          </form>
    </div>
</div>
@endsection