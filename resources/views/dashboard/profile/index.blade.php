@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Profile</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                <a class="breadcrumb-item" href="#">Pages</a>
                <span class="breadcrumb-item active">Profile</span>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="d-md-flex align-items-center">
                            <div class="text-center text-sm-left ">
                                <div class="avatar avatar-image" style="width: 150px; height:150px">
                                    <img src="{{ asset('admin/demo/app/images') }}/{{ Auth::user()->avatar }}" alt="">
                                </div>
                            </div>
                            <div class="text-center text-sm-left m-v-15 p-l-30">
                                <h2 class="m-b-5">{{ Auth::user()->name }}</h2>
                                <p class="text-opacity font-size-13">{{ Auth::user()->email }}</p>
                                <p class="text-dark m-b-20">{{ Auth::user()->role }}</p>
                                @include('dashboard.profile.modal.avatar')
                                <button type="button" class="btn btn-primary btn-tone" data-toggle="modal" data-target="#changeAvatar">
                                    Ganti Avatar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="d-md-block d-none border-left col-1"></div>
                            <form action="{{ route('profile.changepassword') }}" method="post">
                                @csrf
                                <div class="col">
                                    <ul class="list-unstyled m-t-10">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-12">
                                                <label for="validationServer01">Password Sekarang</label>
                                                <input type="password" class="form-control" name="passwordsekarang"
                                                    placeholder="Password Sekarang" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-12">
                                                <label for="validationServer01">Password Baru</label>
                                                <input type="password" class="form-control" name="passwordbaru"
                                                    placeholder="Password Baru" required>
                                            </div>
                                        </div>
                                    </ul>
                                    <div class="d-flex font-size-22 m-t-15">
                                        <button type="submit" class="btn btn-warning btn-tone">Ubah Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
