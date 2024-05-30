@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="row">
        <div class="col-md-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                            <i class="anticon anticon-info"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">Informasi</h2>
                            <p class="m-b-0 text-muted">Selamat datang dihalaman dashboard | Sistem Layanan jasa terbaik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="m-b-0">90</h2>
                            <p class="m-b-0 text-muted">Jumlah Layanan saat ini</p>
                        </div>
                        <div>
                            <span class="badge badge-pill badge-cyan font-size-12">
                                <span class="font-weight-semibold m-l-5">+5</span>
                            </span>
                        </div>
                    </div>
                    <div class="m-t-50" style="height: 375px">
                        <canvas class="chart" id="avg-profit-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Top Layanan</h5>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Layanan</th>
                                        <th>Alamat</th>
                                        <th>No. Handphone</th>
                                        <th style="max-width: 70px">Stok Kamar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="{{ asset('admin/demo/app') }}/assets/images/others/thumb-9.jpg"
                                                        alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Gray Sofa</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>81</td>
                                        <td>$1,912.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" style="width: 82%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    82
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="{{ asset('admin/demo/app') }}/assets/images/others/thumb-10.jpg"
                                                        alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Gray Sofa</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>26</td>
                                        <td>$1,377.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" style="width: 61%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    61
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="{{ asset('admin/demo/app') }}/assets/images/others/thumb-11.jpg"
                                                        alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Wooden Rhino</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>71</td>
                                        <td>$9,212.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    23
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="{{ asset('admin/demo/app') }}/assets/images/others/thumb-12.jpg"
                                                        alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Red Chair</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>79</td>
                                        <td>$1,298.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    54
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="{{ asset('admin/demo/app') }}/assets/images/others/thumb-13.jpg"
                                                        alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Wristband</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>60</td>
                                        <td>$7,376.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" style="width: 76%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    76
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
