@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="book-details">
            <div class="card border-0 shadow-lg overflow-hidden rounded-4" style="background-color: #f4f4f9;">
                <div class="card-header bg-gradient-primary text-white text-center py-4"
                     style="font-family: 'Roboto', sans-serif; font-size: 2.2rem; font-weight: 700; letter-spacing: 1px;">
                    <span style="text-transform: uppercase; background: linear-gradient(90deg, #3498db, #9b59b6);
                    -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        {{ $book->title }}
                    </span>
                </div>
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="book-info">
                                <h5 style="font-family: 'Lato', sans-serif; font-size: 1.5rem; font-weight: 600; color: #2c3e50;">Author:</h5>
                                <p style="font-size: 1.2rem; color: #34495e;">{{ $book->author }}</p>

                                <h5 style="font-family: 'Lato', sans-serif; font-size: 1.5rem; font-weight: 600; color: #2c3e50;">Description:</h5>
                                <p style="font-size: 1.2rem; line-height: 1.8; color: #7f8c8d;">{{ $book->description }}</p>

                                <h5 style="font-family: 'Lato', sans-serif; font-size: 1.5rem; font-weight: 600; color: #2c3e50;">Price:</h5>
                                <p style="font-size: 1.5rem; font-weight: bold; color: #27ae60;">${{ number_format($book->price, 2) }}</p>

                                <h5 style="font-family: 'Lato', sans-serif; font-size: 1.5rem; font-weight: 600; color: #2c3e50;">Posted By:</h5>
                                <p style="font-size: 1.2rem; color: #34495e;">{{ $book->user->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <!-- Check if the book has an image, if not use the online placeholder -->
                            <img src="{{ $book->image ? asset('storage/' . $book->image) : 'https://th.bing.com/th/id/R.33ea32263300ac2382536cf86e32e48e?rik=MrTMmjB7aL9e5w&pid=ImgRaw&r=0' }}" alt="Book Image" class="img-fluid rounded-3 shadow-sm" style="max-height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white text-center py-4">
                    <a href="{{ route('books.index') }}"
                       class="btn btn-primary btn-lg rounded-pill px-5"
                       style="font-family: 'Roboto', sans-serif; font-size: 1.1rem; font-weight: 500; text-transform: uppercase;">
                        Back to Books List
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
