@extends('layouts.app');
# @Date:   2019-11-04T20:19:40+00:00
# @Last modified time: 2019-11-04T20:47:59+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Books
          </div>
          <div class="card-body">
            @if (count($books) === 0)
              <p> There are no books</p>
            @else
              <table id="table-books" class="table table-hover">
                <thead>
                  <th>Title</th>
                  <th>Authors</th>
                  <th>Publishers</th>
                  <th>Year</th>
                  <th>ISBN</th>
                  <th>Price</th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach ($books as $book)
                    <tr data-id="{{$book->id}}">
                      <td>{{$book->title}}</td>
                      <td>{{$book->author}}</td>
                      <td>{{$book->publisher}}</td>
                      <td>{{$book->year}}</td>
                      <td>{{$book->isbn}}</td>
                      <td>{{$book->price}}</td>
                      <td>
                        <a href="{{route('user.books.show', $book->id)}}" class="btn btn-primary">View</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
