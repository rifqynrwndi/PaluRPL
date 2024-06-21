@extends('dashboard.layout.app')
@include('dashboard.layout.head')
@include('dashboard.layout.header')

@section('title', 'Bookings')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Bookings</h1>
                <div class="section-header-button">
                    <a href="{{ route('booking.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Booking</div>
                </div>
            </div>
            <div class="section-body">
                {{-- <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div> --}}
                <h2 class="section-title">Bookings</h2>
                <p class="section-lead">
                    You can manage all Bookings, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Bookings</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{route ('booking.index')}}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="user_name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>

                                            <th>User Name</th>
                                            <th>Worker Name</th>
                                            <th>Service</th>
                                            <th>Booking Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Total Cost</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($bookings as $booking)
                                            <tr>

                                                <td>
                                                    {{ $booking->user ? $booking->user->name : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $booking->worker->user ? $booking->worker->user->name : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $booking->service ? $booking->service->service_name : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $booking->booking_date }}
                                                </td>
                                                <td>
                                                    {{ $booking->start_time }}
                                                </td>
                                                <td>
                                                    {{ $booking->end_time }}
                                                </td>
                                                <td>
                                                    {{ $booking->total_cost }}
                                                </td>
                                                <td>
                                                    {{ $booking->status }}
                                                </td>
                                                <td>
                                                    {{ $booking->created_at }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('booking.edit', $booking->id) }}"
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $bookings->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
