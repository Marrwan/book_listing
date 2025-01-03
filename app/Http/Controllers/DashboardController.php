<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     */
    public function index()
    {
        $user = Auth::user();
        $totalBooks = Book::where('user_id', $user->id)->count();
        $latestBooks = Book::where('user_id', $user->id)->latest()->take(5)->get();

        return view('dashboard', compact('totalBooks', 'latestBooks'));
    }
}
