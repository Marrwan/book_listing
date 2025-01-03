@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="display-4 text-primary font-weight-bold">Add New Book</h1>
            <p class="lead text-muted mb-5">Fill out the form below to add a new book to your collection.</p>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> There are some problems with your submission.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-5 overflow-hidden">
                    <div class="card-header bg-gradient-to-r from-blue-500 to-purple-600 text-white text-center py-5">
                        <h3 class="mb-0">Book Information</h3>
                    </div>
                    <div class="card-body bg-light p-5">
                        <form method="POST" action="{{ route('books.store') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="form-label text-dark font-weight-bold">Title</label>
                                <input type="text" class="form-control shadow-lg border-0 rounded-pill p-3 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter book title" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="author" class="form-label text-dark font-weight-bold">Author</label>
                                <input type="text" class="form-control shadow-lg border-0 rounded-pill p-3 @error('author') is-invalid @enderror" id="author" name="author" placeholder="Enter author name" value="{{ old('author') }}" required>
                                @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label text-dark font-weight-bold">Description</label>
                                <textarea class="form-control shadow-lg border-0 rounded-3 p-3 @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Write a brief description" required>{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="price" class="form-label text-dark font-weight-bold">Price</label>
                                <input type="number" class="form-control shadow-lg border-0 rounded-pill p-3 @error('price') is-invalid @enderror" id="price" name="price" step="0.01" placeholder="Enter book price" value="{{ old('price') }}" required>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
