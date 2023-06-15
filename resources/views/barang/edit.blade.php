@extends('layouts.main-view')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Edit Data Barang
                </div>
                <div class="card-body">
                    <form action="{{route('barang.update', $barang->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <img src="{{ asset('/storage/images/barang/'.$barang->gambar) }}" alt="gambar edit"
                            class="img-thumbnail mb-3" width="250px">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Kategori Barang</span>
                                    <select class="form-select" name="id_kategori">
                                        <option selected value="{{$barang->kategori->id}}">
                                            {{$barang->kategori->nama_kategori}}</option>
                                        @foreach($kategori as $row)
                                        <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nama Ruangan</span>
                                    <select class="form-select" name="id_ruangan">
                                        <option selected value="{{$barang->ruangan->id}}">
                                            {{$barang->ruangan->nama_ruangan}}</option>
                                        @foreach($ruangan as $row)
                                        <option value="{{$row->id}}">{{$row->nama_ruangan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nomor Barang</span>
                                    <input type="text" name="nomor_barang" value="{{$barang->nomor_barang}}"
                                        class="form-control" placeholder="Nomor Barang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nama Barang</span>
                                    <input type="text" name="nama_barang" value="{{$barang->nama_barang}}"
                                        class="form-control" placeholder="Nama Barang">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="">Stok/Satuan</span>
                                    <input type="number" value="{{$barang->stok}}" name="stok" class="form-control">
                                    <select class="form-select" name="satuan">
                                        <option selected value="{{$barang->satuan}}">{{$barang->satuan}}</option>
                                        <option value="unit">Unit</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="butir">Butir</option>
                                        <option value="liter">Liter</option>
                                        <option value="lembar">Lembar</option>
                                        <option value="roll">Roll</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Kondisi</span>
                                    <select class="form-select" name="kondisi">
                                        <option selected value="{{$barang->kondisi}}">{{$barang->kondisi}}</option>
                                        <option value="baik">Baik</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="tidak layak">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-file">
                                    <input type="file" value="{{$barang->gambar}}" name="gambar" class="form-control"
                                        id="inputGroupFile01">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">

                                    <textarea class="form-control" name="spek" id="konten">
                                        {!! $barang->spek !!}
                                    </textarea>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Edit Data</button>
                                    <a href="/barang" class="btn btn-info">Cencel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection