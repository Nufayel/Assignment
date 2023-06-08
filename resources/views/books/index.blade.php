@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <h1>Books</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
