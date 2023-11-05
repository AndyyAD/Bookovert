@extends('layout.app')

@section('title')
{{"Home"}}
@endsection

@section('content')
<div class="container px-5">
    <form class="d-flex mb-3" role="search" action="{{ route('home') }}" method="GET">
        <input class="form-control me-2" type="text" placeholder="Search you book..." aria-label="Search you book..." name="query">
        <button class="btn btn-lg btn-outline-success px-5 fw-semibold" type="submit"> Search </button>
    </form>

    @if ($sQuery)
    <p> Search Results for "{{ $sQuery }}": </p>
    @endif

    <div class="container">
        <h2 class="mt-5">Book List</h2>
        <div class="mt-4 row">
            @foreach($books as $book)
            <div class="col-md-6">
                <div class="card mb-4" style="border: 1px solid green; width:600px;">
                    <div class="card-body d-flex">
                        <img src="{{ $book->image }}" alt="{{ $book->title }} image" style="height: 350px">
                        <div class="ms-3">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->author }}</p>
                            <p class="card-text">{{ $book->genre }}</p>
                            <p class="card-text pb-2">{{ $book->description }}</p>
                            <a href="{{ $book->link }}" class="btn btn-info px-3 py-2" target="_blank"> Read Book </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection