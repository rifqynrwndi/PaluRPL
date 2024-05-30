@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Data Kriteria</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Data Tugas</a>
            </nav>
        </div>
    </div>

    @include('dashboard.perhitungan.pemilikkost.perhitungan')

    <div class="card">

        <!-- Content Wrapper END -->

    </div>
    <!-- Content Wrapper END -->
    @include('dashboard.layout.footer')
