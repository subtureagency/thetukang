<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Session;

class Review extends Controller
{

  public function __construct()
  {
  }

  public function index()
  {
    return view('user.reviews');
  }
}
