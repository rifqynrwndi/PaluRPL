@extends('dashboard.layout.app')
@include('dashboard.layout.head')
@include('dashboard.layout.header')

@section('title', 'Edit Transaction')

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
                <h1>Edit Transaction</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Transaction</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit Transaction</h2>

                <div class="card">
                    <form action="{{ route('transaction.update', $transaction) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Transaction Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <select class="form-control selectric @error('user_id') is-invalid @enderror" name="user_id">
                                    <option value="">Select Worker</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id', $transaction->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Transaction Type</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="transaction_type" value="debit" class="selectgroup-input"
                                            @if ($transaction->transaction_type == 'debit') checked @endif>
                                        <span class="selectgroup-button">Debit</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="transaction_type" value="cash" class="selectgroup-input"
                                            @if ($transaction->transaction_type == 'cash') checked @endif>
                                        <span class="selectgroup-button">Cash</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="transaction_type" value="qris" class="selectgroup-input"
                                            @if ($transaction->transaction_type == 'qris') checked @endif>
                                        <span class="selectgroup-button">QRIS</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number"
                                    class="form-control @error('amount') is-invalid @enderror"
                                    name="amount"
                                    value="{{ old('amount', $transaction->amount) }}">
                                @error('amount')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="transaction_date">Transaction Date</label>
                                <input type="date" id="transaction_date" name="transaction_date" class="form-control @error('transaction_date') is-invalid @enderror" value="{{ old('transaction_date', $transaction->transaction_date) }}">
                                @error('transaction_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="pending" {{ old('status', $transaction->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="failed" {{ old('status', $transaction->status) == 'failed' ? 'selected' : '' }}>Failed</option>
                                    <option value="completed" {{ old('status', $transaction->status) == 'completed' ? 'selected' : '' }}>Completed</option>
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
    <!-- JS Libraries -->
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/jquery.selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
