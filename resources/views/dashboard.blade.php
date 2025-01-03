@extends('layouts.app')

@section('content')
    <div class="container py-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Books</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalBooks }}</h5>
                        <p class="card-text">Books you have added to your listings.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Latest Books</div>
                    <div class="card-body">
                        @if ($latestBooks->isEmpty())
                            <p class="text-muted">No books added yet.</p>
                        @else
                            <ul class="list-group">
                                @foreach ($latestBooks as $book)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5>{{ $book->title }}</h5>
                                            <p class="mb-0"><strong>Author:</strong> {{ $book->author }}</p>
                                        </div>
                                        <span class="badge bg-success">${{ $book->price }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
