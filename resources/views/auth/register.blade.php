@include('auth.layout.header');
<div class="container d-flex h-100">
    <div class="row align-items-center w-100">
        <div class="col-md-7 col-lg-5 m-h-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-30">
                        <img class="img-fluid" alt=""
                            src="{{ asset('admin/demo/app') }}/assets/images/logo/logo.png" width="100">
                        <h2 class="m-b-0">Sign Up</h2>
                    </div>
                    @include('auth.validation.register_error')
                    <form action="{{ route('register.post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">No. Handphone</label>
                            <input type="number" class="form-control" name="nohp" placeholder="No. Handphone">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="password">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <label for="inputState">Sebagai</label>
                            <select id="inputState" name="role" class="form-control">
                                <option value="mahasiswa">User</option>
                                <option value="pemilikkos">Pekerja</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                <div class="checkbox">
                                    <input id="checkbox" name="checkbox" type="checkbox" required>
                                    <label for="checkbox"><span>I have read the <a href="">agreement</a></span></label>
                                </div>
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                            <span class="font-size-13 text-muted">
                                Sudah punya akun?
                                <a class="small" href="{{ route('login') }}"> Login</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('auth.layout.footer');
