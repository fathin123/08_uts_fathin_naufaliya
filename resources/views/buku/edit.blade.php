@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Buku') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>        
                    @endif
                    <form method="post" action="{{ route('buku.update',  $Buku->id_buku) }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="id_buku">ID_Buku</label>                    
                            <input type="text" name="id_buku" class="form-control" id="id_buku" value="{{ $Buku->id_buku }}" aria-describedby="id_buku" >                
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>                    
                            <input type="judul" name="judul" class="form-control" id="judul" value="{{ $Buku->judul }}" aria-describedby="judul" >                
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                                <input type="kategori" name="kategori" class="form-control" id="kategori" value="{{ $Buku->kategori }}" aria-describedby="kategorii" >                
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>                    
                                <input type="penerbit" name="penerbit" class="form-control" id="penerbit" value="{{ $Buku->penerbit }}" aria-describedby="penerbit" >                
                            </div>
                            <div class="form-group">
                               <label for="pengarang">Pengarang</label>                    
                               <input type="pengarang" name="pengarang" class="form-control" id="pengarang" value="{{ $Buku->pengarang }}" aria-describedby="pengarang" >                
                           </div>
                           <div class="form-group">
                            <label for="jumlah">Jumlah</label>                    
                            <input type="jumlah" name="jumlah" class="form-control" id="jumlah" value="{{ $Buku->jumlah }}" aria-describedby="jumlah" >                
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>                    
                            <input type="status" name="status" class="form-control" id="status" value="{{ $Buku->status }}" aria-describedby="status" >                
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
