<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {   
        $sQuery = $request->input('query');
        $books = Book::when($sQuery, function($query) use ($sQuery){
            return $query->where('title', 'like', '%' . $sQuery . '%')->orWhere('author', 'like', '%' . $sQuery . '%');
        })->get();
        return view('home', compact('books', 'sQuery'));
    }
}
