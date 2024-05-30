@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Data Kost</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Data Layanan</a>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>{{ $kost->nama_kost }}</h4>
            <div class="m-t-25">
                <div class="card" style="max-width: 800px">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img class="img-fluid" src="{{ asset('admin/demo/app/images') }}/{{ $kost->gambar }}" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10 ml-auto mr-auto">
                                        <div class="m-t-30">
                                            <h4>{{ $kost->nama_kost }}</h4>
                                            <p><b>Fasilitas:</b> {{ implode(', ', json_decode($kost->fasilitas)) }}</p>
                                            <p><b>Harga Sewa:</b> @currency($kost->harga_sewa)</p>
                                            <p><b>Lokasi:</b> {{ $kost->lokasi }}</p>
                                            <p><b>Kenyamanan:</b> {{ $kost->kenyamanan }}</p>
                                            <p><b>Keamanan:</b> {{ $kost->keamanan }}</p>
                                            <p><b>Luas Kamar:</b> {{ $kost->panjangkamar }} x {{ $kost->lebarkamar }} m<sup>2</sup></p>
                                            <p><b>Jarak dari Kampus:</b> {{ $kost->jarak_dari_kampus }} meter</p>
                                            <p><b>Desain Rumah:</b> {{ $kost->desain_rumah }}</p>
                                            <p><b>Tipe Kost:</b> {{ $kost->tipe_kost }}</p>
                                            <div class="m-t-25">
                                                <a href="{{ route('rekomendasikost.index') }}" class="btn btn-default">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">

        <!-- Content Wrapper END -->

    </div>
    <!-- Content Wrapper END -->
    @include('dashboard.layout.footer')
