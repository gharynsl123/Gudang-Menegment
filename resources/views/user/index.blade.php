@extends('layouts.main-view')

@section('content')
<div class="container">
    <h3>PIC Ruangan</h3>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Create Data PIC -->
            <div class="rounded shadow p-3 border">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Lengkap</span>
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Pengguna / Username</span>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email</span>
                                <input type="email" name="email" class="form-control" placeholder="Alamat Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Katasandi / Password</span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Data PIC -->

            <div class="card mt-5 p-3 shadow">
                <div class="table-responsive">
                    <table class="table table-hover" id="datatablesSimple">
                        <thead>
                            <th>Nama</th>
                            <th>nama Pengguna</th>
                            <th>Pilihan</th>
                        </thead>
                        <tbody>
                            @foreach($user as $row)
                            @if($row->level == 'pic')
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->username}}</td>
                                <td>
                                    <form action="{{route('user.destroy',$row->id)}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('user.show',$row->id)}}" class="btn btn-success">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                        <a href="{{route('user.edit',$row->id)}}" class="btn btn-primary"><i
                                                class="fa fa-pen-to-square text-white "></i></a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda akan menghapus {{$row->user}} ?');"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection