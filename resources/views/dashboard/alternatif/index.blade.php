@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Data Alternatif</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Data Alternatif</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAlternatif" style="float: right;">
                <i class="anticon anticon-plus m-r-5"></i>Tambah Alternatif
            </button>
            @include('dashboard.alternatif.modal.tambah')
            <h4>Data Alternatif</h4>
            <p>Ini adalah Data Alternatif yang telah ditambahkan.</p>
            @error('kode')
            <div class="alert alert-danger">
                <div class="d-flex align-items-center justify-content-start">
                    <span class="alert-icon">
                        <i class="anticon anticon-close-o"></i>
                    </span>
                    <span>{{ $message }}</span>
                </div>
            </div>
            @enderror
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatif as $k)
                            @include('dashboard.alternatif.modal.edit')
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $k->kode }}</td>
                                    <td>{{ $k->namaalternatif }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editAlternatif{{ $k->id }}">
                                            Ubah
                                        </button>
                                        <a href="{{ route('alternatif.delete', $k->id) }}" class="btn btn-danger btn-xs" onClick="confirm('Yain ingin menghapus Alternatif tersebut?')">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

    <!-- Content Wrapper END -->

</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
