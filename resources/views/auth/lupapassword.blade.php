@include('auth.layout.header');
<div class="container d-flex h-100">
    <div class="row align-items-center w-100">
        <div class="col-md-7 col-lg-5 m-h-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-30">
                        <img class="img-fluid" alt=""
                            src="{{ asset('admin/demo/app') }}/assets/images/logo/logo.png" width="100">
                        <h2 class="m-b-0">Forgot Password</h2>
                    </div>
                    <form action="#" method="POST">
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
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="font-size-13 text-muted">
                                    Sudah punya akun?
                                    <a class="small" href="{{ route('login') }}"> Login</a>
                                </span>
                                <button type="submit" class="btn btn-primary">Kirim ke Email</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('auth.layout.footer');
