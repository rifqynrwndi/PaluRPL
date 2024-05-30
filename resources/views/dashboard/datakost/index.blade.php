@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Informasi Layanan</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Informasi Layanan</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if (Auth::user()->role == 'admin' or Auth::user()->role == 'pemilikkost')
            <a href="{{ route('datakost.insert') }}" class="btn btn-primary" style="float: right;"><i class="anticon anticon-plus m-r-5"></i>Tambah Layanan</a>
            @endif
            <h4>Data Layanan</h4>
            <p>Ini adalah daftar Layanan yang telah ditambahkan.</p>
        </div>
    </div>
    <div class="row">
        @foreach ($datakost as $dk)
            <div class="col-md-4 col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('admin/demo/app/images') }}/{{ $dk->gambar }}" alt="">
                    <div class="card-body">
                        <h4 class="m-t-10">{{ $dk->nama_kost }}</h4>
                        <span class="badge badge-pill badge-magenta">Fasilitas: {{ implode(', ', json_decode($dk->fasilitas)) }}</span>
                        <span class="badge badge-pill badge-red">Harga Sewa: @currency($dk->harga_sewa)/bulan</span>
                        <span class="badge badge-pill badge-orange">Lokasi: {{ $dk->lokasi }}</span>
                        <span class="badge badge-pill badge-gold">Kenyamanan: {{ $dk->kenyamanan }}</span>
                        <span class="badge badge-pill badge-lime">Keamanan: {{ $dk->keamanan }}</span>
                        @if (Auth::user()->role == 'admin' or Auth::user()->role == 'pemilikkost')
                        <div class="m-t-20">
                            <a href="{{ route('datakost.edit', $dk->id) }}" class="btn btn-warning">Ubah</a>
                            <a href="{{ route('datakost.delete', $dk->id) }}" onclick="return confirm('Yakin Hapus')" class="btn btn-danger">Hapus</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="card">

    <!-- Content Wrapper END -->

</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
