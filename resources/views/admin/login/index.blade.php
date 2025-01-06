<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- Bootstrap 5 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- Bootstrap 5 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- CKEditor --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin/style.css') }}">
</head>

<body class="">
    <section class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card card-md shadow bg-light p-3 mx-3" style="width: 500px;">
            <div class="d-flex flex-column">
                <figure class="d-flex justify-content-center px-3 py-2 w-100">
                    <img src="{{ asset('assets/img/dinkop.png') }}" alt="logo" class="img-fluid">
                </figure>
                <h1 class="text-center fw-bold pb-3">Login Admin</h1>
                @if (session('error'))
                    <div class="alert alert-danger text-center mt-3">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="masukkan email anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="masukkan kata sandi anda" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold fs-5">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
