@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left mt-2">
                            <h2>Data Fanadh Buku</h2>
                            </div>
                        <div class="float-right my-2">
                            <a class="btn btn-success" href="{{ route('buku.create') }}"> Input Data Buku</a>
                        </div>
                        </div>
                    </div>
                    <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-50 mb-3">
                            <label for="search" class="d-block mr-2">Pencarian</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif 
                    
                    <table class="table table-bordered">
                        <tr>
                        <th>ID_Buku</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Penerbit</th>
                        <th>Pengarang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th width="300px">Action</th>
                        </tr>
                        @foreach ($bukus as $Buku)
                        <tr>
                        
                        <td>{{ $Buku->id_buku }}</td>
                        <td>{{ $Buku->judul }}</td>
                        <td>{{ $Buku->kategori }}</td>
                        <td>{{ $Buku->penerbit }}</td>
                        <td>{{ $Buku->pengarang }}</td>
                        <td>{{ $Buku->jumlah }}</td>
                        <td>{{ $Buku->status }}</td>
                        <td>
                        <form action="{{ route('buku.destroy',$Buku->id_buku) }}" method="POST">
                        
                        <a class="btn btninfo" href="{{ route('buku.show',$Buku->id_buku) }}">Show</a>
                        <a class="btn btnprimary" href="{{ route('buku.edit',$Buku->id_buku) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
