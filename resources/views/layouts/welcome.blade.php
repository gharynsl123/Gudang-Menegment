<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <nav class="sb-topnav navbar top-center navbar-expand navbar-dark bg-dark">
        <form action="/" method="get" class="d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

                <input type="text" name="keyword" value="{{Request::get('keyword')}}" class="form-control"
                    placeholder="Cari apa..?" />

                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>

            </div>
        </form>
        @if (Route::has('login'))
        <div class="links">
            @auth
            <a href="{{ url('/home') }}" class="text-white">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-white">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </nav>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="row">
                <h1>Mau Cari Apa Kamu Disini</h1>
                <div class="col-md-12">
                    @if(Request::get('keyword'))
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-success">
                                Hasil Pencarian dari {{Request::get('keyword')}}
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Nama Barang</th>
                                        <th>Nomor Barang</th>
                                        <th>Pilihan</th>
                                    </thead>
                                    <tbody>
                                        @foreach($barang as $row)
                                        <tr>
                                            <td>{{$row->nama_barang}}</td>
                                            <td>{{$row->nomor_barang}}</td>
                                            <td>#</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>