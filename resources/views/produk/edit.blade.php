@extends('layout.master')
@section('content')
<h1>Edit Data</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    Data Sukses Ditambah
    </div>
    @endif
    <div class="row">
    <div class="col-lg-12">
    <form action ="/produk/{{$produk->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input name="nama_produk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang" value="{{$produk->nama_produk}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{$produk->keterangan}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga" value="{{$produk->harga}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah</label>
                <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$produk->jumlah}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
    </div>

@endsection




