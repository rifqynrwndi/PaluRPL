@extends('dashboard.layout.app')
@include('dashboard.layout.head')
@include('dashboard.layout.header')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Workers</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Workers</h2>

                <div class="card">
                    <form action="{{ route('worker.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Create Worker</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <select class="form-control selectric @error('user_id') is-invalid @enderror" name="user_id" id="user_id">
                                    <option value="">Select Worker</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                    <option value="create_new_user">Create New User</option>
                                </select>
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <input type="number" step="0.1" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}">
                                @error('rating')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Service</label>
                                <select class="form-control selectric @error('service_id') is-invalid @enderror" name="service_id">
                                    <option value="">Select Services</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>{{ $service->service_name }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Verified Status</label>
                                <select class="form-control @error('verified_status') is-invalid @enderror" name="verified_status">
                                    <option value="1" {{ old('verified_status') == 1 ? 'selected' : '' }}>Verified</option>
                                    <option value="0" {{ old('verified_status') == 0 ? 'selected' : '' }}>Not Verified</option>
                                </select>
                                @error('verified_status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('user_id').addEventListener('change', function() {
    if (this.value === 'create_new_user') {
        window.location.href = '{{ route('user.create') }}';
    }
    });
</script>
@endpush
