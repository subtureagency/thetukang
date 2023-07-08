@extends('layouts.master')
@section('content')
  <!-- Visual Area -->
  <div class="visual-area">
    <div class="description position-absolute">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
          <div class="col-12 col-md-8">
            <h1 class="text-center text-white text-uppercase m-0">Vendor Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="image-holder"><img src="{{ url('theme/images/banner.jpg') }}" alt="banner"></div>
  </div>

  <!-- Dashboard -->
  <div class="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="table-holder">
            <table>
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Date / Time</th>
                  <th>Service</th>
                  <th>Vendor</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="Order No">#10001</td>
                  <td data-title="Date / Time">1-1-2022  10:29:28</td>
                  <td data-title="Service">General Cleaning</td>
                  <td data-title="Customer">
                    Akmal R.
                    <ul class="list-inline m-0">
                      <li class="list-inline-item"><a href="#">Chat</a></li>
                    </ul>
                  </td>
                  <td data-title="Amount">RM 50.00</td>
                  <td data-title="Status"><span class="badge bg-warning">Pending</span></td>
                  <td data-title="Action">
                    <ul class="list-inline m-0">
                      <li class="list-inline-item"><a href="#">Accept Job</a></li>
                      <li class="list-inline-item"><a href="#">Decline Job</a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td data-title="Order No">#10002</td>
                  <td data-title="Date / Time">2-1-2022  13:01:18</td>
                  <td data-title="Service">Professional Cleaning</td>
                  <td data-title="Customer">
                    Wan A.
                    <ul class="list-inline m-0">
                      <li class="list-inline-item"><a href="#">Chat</a></li>
                    </ul>
                  </td>
                  <td data-title="Amount">RM 250.00</td>
                  <td data-title="Status"><span class="badge bg-success">Done</span></td>
                  <td data-title="Action">
                    <ul class="list-inline m-0">
                      <li class="list-inline-item"><a href="{{ route('user.review') }}">Leave Review</a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td data-title="Order No">#10003</td>
                  <td data-title="Date / Time">2-1-2022  14:30:08</td>
                  <td data-title="Service">Commercial Cleaning</td>
                  <td data-title="Customer">Faiz I.</td>
                  <td data-title="Amount">RM 250.00</td>
                  <td data-title="Status"><span class="badge bg-danger">Declined</span></td>
                  <td data-title="Action"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <p>*Once the job is declined, you can’t re-accept the job again.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
