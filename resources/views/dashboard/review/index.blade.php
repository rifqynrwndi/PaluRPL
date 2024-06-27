@extends('dashboard.layout.app')
@include('dashboard.layout.head')
@include('dashboard.layout.header')

@section('title', 'Reviews')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Reviews</h1>
                <div class="section-header-button">
                    <a href="{{ route('review.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Review</div>
                </div>
            </div>
            <div class="section-body">
                {{-- <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div> --}}
                <h2 class="section-title">Reviews</h2>
                <p class="section-lead">
                    You can manage all Reviews, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Reviews</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{route ('review.index')}}">
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

                                            <th>Booking ID</th>
                                            <th>User Name</th>
                                            <th>Worker Name</th>
                                            <th>Rating</th>
                                            <th>Review Text</th>
                                            <th>Review Date</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($reviews as $review)
                                            <tr>

                                                <td>
                                                    {{ $review->booking ? $review->booking->id : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $review->user ? $review->user->name : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $review->worker->user ? $review->worker->user->name : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $review->rating }}
                                                </td>
                                                <td>
                                                    {{ $review->review_text }}
                                                </td>
                                                <td>
                                                    {{ $review->review_date }}
                                                </td>
                                                <td>
                                                    {{ $review->created_at }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('review.edit', $review->id) }}"
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('review.destroy', $review->id) }}" method="POST" class="ml-2">
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
                                    {{ $reviews->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@include('dashboard.layout.footer')

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
