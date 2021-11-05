@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">
                Ini adalah Panel Administrator Lapak Kami
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title text-primary">
                                Pelanggan
                            </div>
                            <div class="dashboard-card-subtitle text-primary">
                                {{$pelanggan }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title text-success">
                                Pendapatan
                            </div>
                            <div class="dashboard-card-subtitle text-success">
                                Rp.{{ $pendapatan }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title text-warning">
                                Transaksi
                            </div>
                            <div class="dashboard-card-subtitle text-warning">
                                {{ $transaksi }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
