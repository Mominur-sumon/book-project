@extends('layout')
@section('page-content')

    <h1>Books Store</h1>

    <table class="table table-stripped table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $book->title }}</td>

        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->price }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $book->isbn }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $book->stock }}</td>
        </tr>



    </table>

    <p>
        <a class="btn btn-success" href="{{ route('books.index') }}"><i class="bi bi-arrow-left-short"></i>Go Back</a>
    </p>

@endsection
