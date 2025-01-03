@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5" style="font-family: 'Poppins', sans-serif; color: #4A90E2;">Books Listing</h1>
        <div class="text-center mb-4">
            <a href="{{ route('books.create') }}" class="btn btn-primary btn-lg shadow" style="background: linear-gradient(90deg, #ff7eb3, #ff758c); border: none; font-size: 1.2rem;">
                ➕ Add New Book
            </a>
        </div>
        <div class="row mt-3">
            @foreach($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg" style="border-radius: 15px; overflow: hidden; transition: transform 0.3s;">
                        <div class="card-body bg-light text-center" style="position: relative;">
                            <div style="
                                height: 150px;
                                background: url('https://source.unsplash.com/300x150/?book,library') no-repeat center center/cover;
                                border-bottom: 3px solid #4A90E2;"></div>
                            <h5 class="card-title mt-3" style="font-family: 'Roboto Slab', serif; color: #333;">
                                {{ $book->title }}
                            </h5>
                            <p class="card-text text-muted" style="font-size: 0.9rem;">By: {{ $book->author }}</p>
                            <a href="{{ route('books.show', $book) }}" class="btn btn-info mt-2" style="font-size: 1rem; padding: 10px 20px; border-radius: 50px;">
                                📖 View Details
                            </a>
                        </div>
                        <div class="card-footer text-center" style="background: #f9f9f9;">
                            <small style="color: #999; font-style: italic;">Added on {{ $book->created_at->format('F j, Y') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
