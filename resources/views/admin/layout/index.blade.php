<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/toastify/toastify.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/admin/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    @yield('main')
    <script src="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>


    {{-- <script src="assets/js/extensions/sweetalert2.js"></script> --}}
    <script src="{{ asset('admin/assets/js/extensions/sweetalertcustom.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('admin/assets/vendors/toastify/toastify.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/extensions/toastify.js') }}"></script> --}}

    {{-- <script src="assets/vendors/apexcharts/apexcharts.js"></script> --}}
    {{-- <script src="assets/js/pages/dashboard.js"></script> --}}

    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 5000,
                    // close: true,
                    gravity: "top", // or "bottom"
                    position: "right", // or "left"
                    backgroundColor: "#4CAF50", // Green background for success
                }).showToast();
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('error') }}",
                    duration: 5000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#F44336",
                }).showToast();
            });
        </script>
    @endif
</body>

</html>
