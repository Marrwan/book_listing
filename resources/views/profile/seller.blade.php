@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Seller Profile</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ Auth::user()->name }}</h5>
                <p class="card-text">Email: {{ Auth::user()->email }}</p>
                <p class="card-text">Phone: {{ Auth::user()->phone ?? 'Not provided' }}</p>
                <p class="card-text">Books Listed: {{ Auth::user()->books->count() }}</p>
                <a href="{{ route('books.index') }}" class="btn btn-primary">View My Books</a>
            </div>
        </div>
    </div>
@endsection 