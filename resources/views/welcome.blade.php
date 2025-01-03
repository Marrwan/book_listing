<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Book Listing App') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
        }
        .hero-section {
            background: rgba(0, 0, 0, 0.5);
            padding: 100px 0;
        }
        .hero-text {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .btn-primary {
            background-color: #1cc88a;
            border-color: #1cc88a;
        }
        .btn-primary:hover {
            background-color: #17a673;
            border-color: #17a673;
        }
        .nav-item a {
            color: #fff !important;
        }
        .nav-item a:hover {
            color: #1cc88a !important;
        }
        .footer {
            background-color: #222;
            color: white;
            padding: 30px 0;
        }
        .footer a {
            color: #1cc88a;
        }
        .footer a:hover {
            color: #17a673;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Book Listing App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Browse Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center text-white">
    <div class="container">
        <h1 class="hero-text">Welcome to Book Listing App</h1>
        <p class="lead mb-4">Explore a vast collection of books, manage your reading list, and discover new titles tailored to your interests.</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg">Browse Books</a>
    </div>
</section>

<!-- About Section -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="display-4">Why Choose Us?</h2>
        <p class="lead">Our app helps you manage your books efficiently. Whether you're a bookworm or a casual reader, our platform offers you:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Vast Collection</h5>
                        <p class="card-text">Browse and manage thousands of books across different genres and categories.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">User-Friendly Interface</h5>
                        <p class="card-text">Enjoy a seamless experience with an intuitive design and easy navigation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Personalized Recommendations</h5>
                        <p class="card-text">Receive book recommendations based on your interests and reading history.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-center">
    <div class="container">
        <p>&copy; 2025 Book Listing App. All rights reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
