<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor as VendorM;

class Vendor extends Controller
{
  public function index()
  {
    $data = VendorM::all();
    // dd($data);
    return view('admin.vendor',['data'=>$data]);
  }
}
