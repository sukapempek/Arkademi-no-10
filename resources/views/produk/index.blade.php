@extends('layout.master')
@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    Data Sukses Ditambah
    </div>
    @endif
    <div class="row">
    <div class="col-6">
        <h1>Data Produk</h1>
    </div> 
    <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
        Tambah Produk
        </button>   
    </div> 
    
    <table class="table table-hover">
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        @foreach($data_produk as $produk)
        <tr>
            <td>{{$produk->nama_produk}}</td>
            <td>{{$produk->keterangan}}</td>
            <td>{{$produk->harga}}</td>
            <td>{{$produk->jumlah}}</td>
            <td><a href="/produk/{{$produk->id}}/edit" class="btn btn-warning btn-sm">edit</a>
            <a href="/produk/{{$produk->id}}/delete" class="btn btn-danger btn-sm">delete</a></td>

        </tr>
        @endforeach
    </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action ="/produk/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input name="nama_produk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah</label>
                <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah">
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>
    </div>

@endsection



