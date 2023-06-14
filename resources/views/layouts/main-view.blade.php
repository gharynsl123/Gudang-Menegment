<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>
    <!-- CSS File -->
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
    <!-- Icon (Font Awesome) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.app')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{url('home')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{url('user')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            User
                        </a>
                        <a class="nav-link" href="{{url('kategori')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                            Kategori
                        </a>
                        <div class="sb-sidenav-menu-heading">Management</div>
                        <a class="nav-link" href="{{url('ruangan')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-door-closed"></i></div>
                            Ruangan
                        </a>
                        <a class="nav-link" href="{{url('barang')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                            Barang
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    @guest
                    You are Guest Here
                    @else
                    {{Auth::user()->username}}
                    @endguest
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{asset('template/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="{{asset('template/js/datatables-simple-demo.js')}}"></script>

        <script>
        var konten = document.getElementById("konten");
        CKEDITOR.replace(konten, {
            width: '100%',
            extraPlugins: 'editorplaceholder',
            editorplaceholder: 'Deskripsi spesifikasi barang...',
            uiColor: '#CCEAEE'
        });
        CKEDITOR.config.allowedContent = true;
        </script>

</body>

</html>