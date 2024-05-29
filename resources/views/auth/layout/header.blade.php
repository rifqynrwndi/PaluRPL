<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Authentication | {{ env('APP_NAME') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/demo/app') }}/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('admin/demo/app') }}/assets/css/app.min.css" rel="stylesheet">

    {{-- SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    @if (session('info'))
        <script>
            Swal.fire(
            'Upps!',
            '{{ session('info') }}',
            'info'
            )
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire(
            'Good!',
            '{{ session('success') }}',
            'success'
            )
        </script>
    @endif
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('{{ asset('admin/demo/app') }}/assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
