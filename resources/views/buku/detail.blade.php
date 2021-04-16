@extends('layouts.app')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Data Buku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID_Buku: </b>{{$Buku->id_buku}}</li>
                    <li class="list-group-item"><b>Judul: </b>{{$Buku->judul}}</li>
                    <li class="list-group-item"><b>Kategori: </b>{{$Buku->kategori}}</li>
                    <li class="list-group-item"><b>Penerbit: </b>{{$Buku->penerbit}}</li>
                    <li class="list-group-item"><b>Pengarang: </b>{{$Buku->pengarang}}</li>
                    <li class="list-group-item"><b>Jumlah: </b>{{$Buku->jumlah}}</li>
                    <li class="list-group-item"><b>Status: </b>{{$Buku->status}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('buku.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
