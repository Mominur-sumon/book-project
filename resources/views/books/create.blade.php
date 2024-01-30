@extends('layout')

@section('page-content')
<h3>New Book</h3>
<form method="post" action="{{ route('books.store') }}">

    @csrf
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" class="form-control" name="title" value="{{ old('title', $book->title)}}" placeholder="Enter Title" >
      <div class="">{{ $errors->first('title') }}</div>
    </div>

    <div class="form-group">
        <label for="Author">Author</label>
        <input type="text" class="form-control" name="author" value="{{ old('author') }}" placeholder="Enter Author" >
        <div class="">{{ $errors->first('author') }}</div>
      </div>

      <div class="form-group">
        <label for="ISBN">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}" placeholder="Enter ISBN" >
        <div class="">{{ $errors->first('isbn') }}</div>
      </div>

      <div class="form-group">
        <label for="Stock">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{ old('stock') }}" placeholder="Enter Stock" >
        <div class="">{{ $errors->first('stock') }}</div>
      </div>
      <div class="form-group">
        <label for="Price">Price</label>
        <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter Price" >
        <div class="">{{ $errors->first('price') }}</div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('books.index') }}" class="btn btn-danger">Go Back</a>
  </form>


@endsection
