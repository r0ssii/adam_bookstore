<?php
# @Date:   2019-11-04T18:13:57+00:00
# @Last modified time: 2019-11-04T20:51:25+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      // $this->middleware('role:user');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('user.books.index')->with([
          'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('user.books.show')->with([
          'book' => $book
        ]);
    }
}
