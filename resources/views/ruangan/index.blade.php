@extends('layouts.main-view')

@section('content')
<div class="container">
    <h3>PIC Ruangan</h3>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="rounded shadow p-3 border">
                <form action="{{route('ruangan.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nomor Ruangan</span>
                                </div>
                                <input type="text" name="nomor_ruangan" class="form-control"
                                    placeholder="Nomor Ruangan">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Ruangan</span>
                                <input type="text" name="nama_ruangan" class="form-control"
                                    placeholder="Nama Ruangan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Ukuran Ruangan</span>
                                <select class="form-select" name="ukuran">
                                    <option selected>Choose...</option>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Penanggung Jawab</span>
                                <select class="form-select" name="id_user">
                                    <option selected>Choose...</option>
                                    @foreach($user as $row)
                                    @if($row->level == 'pic')
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4">Tambah Data</button>
                </form>
            </div>
            <div class="card mt-4">
                <div class="card-header">Data Ruangan</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="datatablesSimple">
                            <thead>
                                <th>Nomor Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Ukuran</th>
                                <th>Penanggung Jawab</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>

                                @foreach($ruangan as $row)
                                <tr class="p-0">
                                    <td>{{$row->nomor_ruangan}}</td>
                                    <td>{{$row->nama_ruangan}}</td>
                                    <td class="py-2">
                                        @if($row->ukuran == 'small')

                                        <span class="rounded px-3 w-auto py-2 shadow text-white bg-info">Small</span>

                                        @elseif($row->ukuran == 'medium')

                                        <span
                                            class="rounded px-3 w-auto py-2 shadow text-center text-white bg-success">Medium</span>

                                        @elseif($row->ukuran == 'large')

                                        <span
                                            class="rounded px-3 w-auto py-2 shadow text-center text-white bg-danger">Large
                                        </span>

                                        @endif
                                    </td>
                                    <td>{{$row->users->name}}</td>
                                    <td>
                                        <form action="{{route('ruangan.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('ruangan.show',$row->id)}}" class="btn btn-success"><i
                                                    class="fa fa-info-circle"></i></a>
                                            <a href="{{route('ruangan.edit',$row->id)}}" class="btn btn-primary"><i
                                                    class="fa fa-pen-to-square text-white "></i></a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda akan menghapus {{$row->ruangan}} ?');"><i
                                                    class="fa fa-trash"></i></button>
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