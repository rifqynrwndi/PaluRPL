@include('auth.layout.header');
<div class="container d-flex h-100">
    <div class="row align-items-center w-100">
        <div class="col-md-7 col-lg-5 m-h-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-30">
                        <img class="img-fluid" alt=""
                            src="{{ asset('admin/demo/app') }}/assets/images/logo/logo-dark.png" width="200">
                        <h2 class="m-b-0">Sign In</h2>
                    </div>
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">Email:</label>
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-mail"></i>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            @error('email')
                            <span class="badge text-bg-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="password">Password:</label>
                            <a class="float-right font-size-13 text-muted" href="{{ route('forgotpassword') }}">Lupa password?</a>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-lock"></i>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            @error('password')
                            <span class="badge text-bg-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="font-size-13 text-muted">
                                    Belum punya akun?
                                    <a class="small" href="{{ route('register') }}"> Daftar</a>
                                </span>
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('landing-page') }}" id="trigger-loading-1" class="btn btn-default m-r-5">
                        <i class="anticon anticon-loading m-r-5"></i>
                        <span>Kembali ke Home</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('auth.layout.footer');
