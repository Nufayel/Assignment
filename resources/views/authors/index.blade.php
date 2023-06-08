@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h1>Authors</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Total Books</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->books_count }}</td>
                    <td>{{ $author->books_sum_price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
