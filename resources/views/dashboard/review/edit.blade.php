@extends('dashboard.layout.app')
@include('dashboard.layout.head')
@include('dashboard.layout.header')

@section('title', 'Edit Review')

@push('style')
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
                <h1>Edit Review</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Review</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit Review</h2>

                <div class="card">
                    <form action="{{ route('review.update', $review) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Review Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Booking ID</label>
                                <select class="form-control selectric @error('booking_id') is-invalid @enderror" name="booking_id" id="booking_id">
                                    <option value="">Select Booking ID</option>
                                    @foreach ($bookings as $booking)
                                        <option value="{{ $booking->id }}" {{ old('booking_id', $review->booking_id) == $booking->id ? 'selected' : '' }}>{{ $booking->id }}</option>
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
                                        <option value="{{ $user->id }}" {{ old('user_id', $review->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
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
                                        <option value="{{ $worker->id }}" {{ old('worker_id', $review->worker_id) == $worker->id ? 'selected' : '' }}>{{ $worker->name }}</option>
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
                                <input type="number"
                                    class="form-control @error('rating') is-invalid @enderror"
                                    name="rating"
                                    value="{{ old('rating', $review->rating) }}">
                                @error('rating')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Review Text</label>
                                <input type="text"
                                    class="form-control @error('review_text') is-invalid @enderror"
                                    name="review_text"
                                    value="{{ old('review_text', $review->review_text) }}">
                                @error('review_text')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="review_date">Review Date</label>
                                <input type="date" id="review_date" name="review_date" class="form-control @error('transaction_date') is-invalid @enderror" value="{{ old('review_date', $review->review_date) }}">
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
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/jquery.selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

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
                            console.log(data);

                            if (data.user) {
                                $('#user_id').html('<option value="'+ data.user.id +'">'+ data.user.name +'</option>');
                            } else {
                                $('#user_id').html('<option value="">Select User</option>');
                            }

                            if (data.worker && data.worker.id) {
                                $('#worker_id').html('<option value="'+ data.worker.id +'">'+ data.worker.name +'</option>');
                            } else {
                                $('#worker_id').html('<option value="">No Worker Assigned</option>');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error("Error: " + error);
                            console.error("Status: " + status);
                            console.error("Response: " + xhr.responseText);
                            alert('Error loading booking details: ' + xhr.responseText);
                        }
                    });
                } else {
                    $('#user_id').html('<option value="">Select User</option>');
                    $('#worker_id').html('<option value="">Select Worker</option>');
                }
            });
            $('#booking_id').trigger('change');
        });
    </script>
@endpush
