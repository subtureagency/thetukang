<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service as ServiceM;
use App\Models\Vendor as VendorM;

class Service extends Controller
{
  public function index()
  {
    $data = ServiceM::all();
    return view('admin.service',['data'=>$data]);
    // dd('asd');
  }
}
