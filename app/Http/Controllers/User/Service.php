<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor as VendorM;
use App\Models\Package;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Toyyibpay;
use Illuminate\Support\Facades\Route;
use Validator;
use Session;

class Service extends Controller
{
  protected $slot;

  public function __construct()
  {
    $this->slot = ['08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30'];
  }

  public function index(Request $request)
  {
    // Session::forget('userSess');
    $data['slots'] = $this->slot;
    $vendor = VendorM::all();
    if (isset($request->search)) {
      // $route_name = url()->full();
      // dd($_SERVER['REQUEST_URI']);
      // dd($request->all());
      // dd(Session::get('userSess'));
      $requestData['step'] = 0;
      $requestData['search'] = $request->search;
      if (isset($request->step)) {
        $requestData['step'] = $request->step;
        // dd(Session::get('serviceSess'));
        if ($request->step == 2 && !Session::get('serviceSess')) {
          return redirect()->route('user.index', ['search' => $request->search, 'step' => 1])
          ->with('error', 'Please select vendor first.');
        }
        elseif ($request->step == 3) {
          if (!Session::get('serviceSess')) {
            return redirect()->route('user.index', ['search' => $request->search, 'step' => 1])
            ->with('error', 'Please select vendor first.');
          }
          if (!Session::get('timeSess')) {
            return redirect()->route('user.index', ['search' => $request->search, 'step' => 2])
            ->with('error', 'Please select time and date.');
          }
        }
        elseif ($request->step == 4 && !Session::get('userSess')) {
          return redirect()->route('user.index', ['search' => $request->search, 'step' => 3])
          ->with('error', 'Please fill in your details.');
        }
        elseif ($request->step == 5) {
          if (!Session::get('paymentSess')) {
            return redirect()->route('user.index', ['search' => $request->search, 'step' => 4])
            ->with('error', 'Please make your payment.');
          }
          Session::forget('serviceSess');
          Session::forget('timeSess');
          Session::forget('userSess');
          Session::forget('paymentSess');
          Session::forget('searchSess');
        }
      }
      if (count($this->sQuery($request->search))>0) {
        $vendor = $this->sQuery($request->search);
      }
      $data['searchCount'] = count($this->sQuery($request->search));
      $data['vendors'] = $vendor;
      $data['request'] = $requestData;
      return view('user.search',$data);
    }
    $data['vendors'] = $vendor;

    return view('user.index',$data);
  }

  public function saveSession(Request $request)
  {
    $input = $request->all();
    // dd($input);
    if (!isset($input['search']) || !isset($input['step'])) {
      return redirect()->route('user.index');
    }
    if ($input['step'] == 1) {
      if (!isset($input['service'])) {
        return redirect()->route('user.index', ['search' => $request->search, 'step' => 1])
        ->with('error', 'Please select vendor first.');
      }
      Session::put('serviceSess', [
        'service' => VendorM::find($input['service']),
        'package' => Package::find($input['package']),
      ]);

      // dd(Session::get('serviceSess'));


    }
    elseif ($input['step'] == 2) {

      if (empty($input['time'])) {
        return redirect()->route('user.index', ['search' => $request->search, 'step' => 2])
        ->with('error', 'The time field is required.');
      }
      if (empty($input['date'])) {
        return redirect()->route('user.index', ['search' => $request->search, 'step' => 2])
        ->with('error', 'The date field is required.');
      }
      Session::put('timeSess', [
        'date' => $input['date'],
        'time' => $input['time'],
      ]);

    }
    elseif ($input['step'] == 3) {

      $rules = [
        'name' => 'required|string|min:5|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|min:10|max:12',
        'address' => 'required|string|min:10|max:1000',
        'notes' => '',
      ];
      $validator = Validator::make($input,$rules);
      if ($validator->fails()) {
        $response['status'] = "errors";
        return redirect()->route('user.index', ['search' => $input['search'], 'step' => 3])
        ->with($response['status'],$validator->errors());
        // return redirect()->back()->with($response['status'],$validator->errors());
      }

      Session::put('userSess', [
        'name' => $input['name'],
        'phone' => $input['phone'],
        'email' => $input['email'],
        'address' => $input['address'],
        'notes' => $input['notes'],
      ]);
    }
    elseif ($input['step'] == 4) {

      $rules = [
        'name' => 'required|string|min:5|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|min:10|max:12',
        'address' => 'required|string|min:10|max:1000',
        'notes' => '',
      ];
      $validator = Validator::make($input,$rules);
      if ($validator->fails()) {
        $response['status'] = "errors";
        return redirect()->route('user.index', ['search' => $input['search'], 'step' => 3])
        ->with($response['status'],$validator->errors());
        // return redirect()->back()->with($response['status'],$validator->errors());
      }

      Session::put('userSess', [
        'name' => $input['name'],
        'phone' => $input['phone'],
        'email' => $input['email'],
        'address' => $input['address'],
        'notes' => $input['notes'],
      ]);

    }

    return redirect()->route('user.index', ['search' => $input['search'], 'step' => $input['step']+1]);
  }

  public function sQuery($search)
  {
    // dd(route('user.service.index',['search'=>url('').urlencode($search)]));
    $data = VendorM::query();
    if ($search) {
      $data->where('name', 'Like', '%' . $search . '%');
    }
    return $data->get();
    // $url = url('')."/?search=";
    // return redirect($url.urlencode($search));
  }

  public function payment(Request $request)
  {
    $service = Session::get('serviceSess');
    $user = Session::get('userSess');
    $time = Session::get('timeSess');
    Session::put('searchSess', $request->search);
    if (!$service || !$user || !$time) {
      return redirect()->route('user.index', ['search' => $request->search, 'step' => 1])
      ->with('error', 'Service not found. Please select again.');
    }

    $code_category = "dridlwyb";
    $total_amount = $service['package']->price;

    // $tP = Toyyibpay::getBanks();  //id,bank,status
    // $tP = Toyyibpay::getBanksFPX(); //CODE,NAME
    // $tP = Toyyibpay::getPackages(); //id,package,fee,status
    // $tP = Toyyibpay::getCategory($code_category); //CategoryName,categoryDescription,categoryStatus
    $bill_object = (object)[];
    $bill_object->billName = mb_substr($service['service']->name, 0, 30);
    $bill_object->billDescription = $service['package']->name." - ".$service['service']->name;
    $bill_object->billPriceSetting = 1;
    $bill_object->billPayorInfo = 1;  //0,1
    $bill_object->billAmount = $total_amount * 100;
    $bill_object->billExternalReferenceNo = 'X123';
    $bill_object->billTo = $user['name'];
    $bill_object->billEmail = $user['email'];
    $bill_object->billPhone = $user['phone'];
    $bill_object->billReturnUrl = route('user.paymentStatus');
    $bill_object->billCallbackUrl = route('user.paymentCallback');
    // dd($bill_object);
    $tP = Toyyibpay::createBill($code_category, $bill_object);  //$tP[0]->BillCode=mc9f0rck
    if (isset($tP->status) && $tP->status=="unsuccess") {
      dd($tP->reason);
    }
    if (isset($tP->status) && $tP->status=="error") {
      dd($tP->msg);
    }
    // dd($tP);
    $bpL = Toyyibpay::billPaymentLink($tP[0]->BillCode);
    return redirect($bpL);

  }

  public function paymentStatus()
  {
    $response = request()->all(['status_id','billcode','order_id']);
    Session::put('paymentSess', $response);
    $user = User::where('email',Session::get('userSess')['email'])->first();
    if (!$user) {
      $user = User::create([
        'name' => Session::get('userSess')['name'],
        'email' => Session::get('userSess')['email'],
        'phone' => Session::get('userSess')['phone'],
        'address' => Session::get('userSess')['address'],
      ]);
    }
    $order = Order::create([
      'user_id' => $user->id,
      'status' => $response['status_id'],
      'note' => Session::get('userSess')['notes'],
    ]);
    OrderDetail::create([
      'user_id' => $user->id,
      'vendor_id' => Session::get('serviceSess')['service']->id,
      'order_id' => $order->id,
      'status' => $response['status_id'],
      'time' => Session::get('timeSess')['time'],
      'date' => Session::get('timeSess')['date'],
    ]);
    $searchSess = Session::get('searchSess');


    return redirect()->route('user.index', ['search' => $searchSess, 'step' => 5]);
  }

  public function callback()
  {
    $response = request()->all(['refno','status','reason','billcode','order_id','amount','transaction_time']);
    return $response;
  }
}
