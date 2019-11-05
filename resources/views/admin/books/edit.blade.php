@extends('layouts.app');
# @Date:   2019-11-04T18:15:24+00:00
# @Last modified time: 2019-11-04T20:13:54+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit book
          </div>
          <div class="card-body">
            @if  ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form method="POST" action="{{route('admin.books.update', $book->id)}}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="title">Titles</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $book->title)}}" />
              </div>
              <div class="form-group">
                <label for="author">Authors</label>
                <input type="text" class="form-control" id="author" name="author" value="{{old('author', $book->author)}}" />
              </div>
              <div class="form-group">
                <label for="publisher">Publishers</label>
                <input type="text" class="form-control" id="publisher" name="publisher" value="{{old('publisher', $book->publisher)}}" />
              </div>
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{old('year', $book->year)}}" />
              </div>
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn', $book->isbn)}}" />
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price', $book->price)}}" />
              </div>
              <a href="{{route('admin.books.index')}}" class="btn btn-link">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
