<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | {{ env('APP_NAME') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/demo/app') }}/assets/images/logo/favicon.png">

    <!-- page css -->
    <link href="{{ asset('admin/demo/app') }}/assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="{{ asset('admin/demo/app') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">


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
        <div class="layout">
