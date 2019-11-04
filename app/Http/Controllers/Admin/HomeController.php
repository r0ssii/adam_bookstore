<?php
# @Date:   2019-10-29T22:20:05+00:00
# @Last modified time: 2019-10-29T23:24:44+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }

  public function index(){
    return view('admin.home');
  }
}
