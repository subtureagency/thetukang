<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor as VendorM;
use App\Models\User;
use Validator;
use Session;
use Auth;

class Dashboard extends Controller
{

  public function __construct()
  {
  }

  public function index()
  {
    return view('vendor.profile');
  }

  public function dashboard()
  {
    $vendor = VendorM::find(1);
    // if (Auth::user()->role()=="superadmin") {
    // }else {
    //   $vendor = Auth::user()->vendor;
    // }
    if (!$vendor) {
      // return redirect()->back()->with('error','No Data found');
    }
    // dd($vendor);
    return view('vendor.dashboard');
  }

}
