@extends('layouts.main-view')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="mt-3 gap-4 d-flex justify-content-center">
                <p class="">Go To Management <a href="{{url('barang')}}">Items</a>?</p>
                <p class="">Go To Management <a href="{{url('ruangan')}}">Room</a>?</p>
            </div>
        </div>
    </div>
</div>
@endsection
