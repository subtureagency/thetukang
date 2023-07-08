<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Session;

class UserProfile extends Controller
{

  public function __construct()
  {
  }

  public function index()
  {
    return view('user.profile');
  }

  public function dashboard()
  {
    return view('user.dashboard');
  }

}
