@extends('layouts.main-view')

@section('content')
<div class="container">
    <h3> Tambah Data Kategori</h3>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="shadow rounded p-3 border">
                <form action="{{route('kategori.store')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nama Kategori</span>
                        <input type="text" name="nama_kategori" class="form-control" placeholder="nama kategori">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Tambah Data</button>
                    </div>
                </form>
            </div>
            <div class="card mt-5">
                <div class="card-header">Data Kategori</div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered m-0">
                            <thead>
                                <th>Nama</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($kategori as $row)
                                <tr>
                                    <td>{{$row->nama_kategori}}</td>
                                    <td>
                                        <form action="{{route('kategori.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda akan menghapus {{$row->nama_kategori}} ?');">Hapus</button>
                                            <a href="{{route('kategori.edit',$row->id)}}"
                                                class="btn btn-success">Edit</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection