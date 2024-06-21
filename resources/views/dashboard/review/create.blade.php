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
                    <div class="breadcrumb-item">Review</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Reviews</h2>

                <div class="card">
                    <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Booking ID</label>
                                <select class="form-control selectric @error('booking_id') is-invalid @enderror" name="booking_id" id="booking_id">
                                    <option value="">Select Booking ID</option>
                                    @foreach ($bookings as $booking)
                                        <option value="{{ $booking->id }}" {{ old('booking_id') == $booking->id ? 'selected' : '' }}>{{ $booking->id }}</option>
                                    @endforeach
                                </select>
                                @error('booking_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <select class="form-control selectric @error('user_id') is-invalid @enderror" name="user_id" id="user_id">
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Worker Name</label>
                                <select class="form-control selectric @error('worker_id') is-invalid @enderror" name="worker_id" id="worker_id">
                                    <option value="">Select Worker</option>
                                    @foreach ($workers as $worker)
                                        <option value="{{ $worker->id }}" {{ old('worker_id') == $worker->id ? 'selected' : '' }}>{{ $worker->name }}</option>
                                    @endforeach
                                </select>
                                @error('worker_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Rating (1-5)</label>
                                <input type="number" class="form-control" name="rating">
                            </div>
                            <div class="form-group">
                                <label>Review Text</label>
                                <input type="text" class="form-control" name="review_text">
                            </div>
                            <div class="form-group">
                                <label for="review_date">Review Date</label>
                                <input type="date" id="review_date" name="review_date" class="form-control @error('review_date') is-invalid @enderror" value="{{ old('review_date') }}" required>
                                @error('review_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#booking_id').change(function () {
            var bookingId = $(this).val();

            if (bookingId) {
                $.ajax({
                    url: '/api/booking-details/' + bookingId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#user_id').html('<option value="'+ data.user.id +'">'+ data.user.name +'</option>');

                        $('#worker_id').html('<option value="'+ data.worker.id +'">'+ data.worker.name +'</option>');
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            } else {
                $('#user_id').html('<option value="">Select User</option>');
                $('#worker_id').html('<option value="">Select Worker</option>');
            }
        });
    });
</script>

@endpush
