<!-- Visual Area -->
<div class="visual-area">
  <div class="description position-absolute">
    <div class="container h-100">
      <div class="row h-100 align-items-end justify-content-center">
        <div class="col-12 col-md-8">
          <h1 class="text-center text-white">General Cleaning</h1>
          <form action="{{route('user.index')}}" class="search-form">
            <div class="form-group">
              <label for="service">Service</label>
              <input type="search" name="search" class="form-control" placeholder="{{ $request['search'] }}" value="{{ $request['search'] }}">
            </div>
            <input type="submit" class="btn btn-primary" value="find">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="image-holder"><img src="{{ url('theme/images/banner.jpg') }}" alt="banner"></div>
</div>

<!-- Steps Block -->
<div class="steps-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-9">
        <ul class="services-steps list-inline">
          <li class="list-inline-item @if ($request['step'] == 0 || $request['step'] == 1)
            active
          @endif">
            <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 1]) }}">
              <strong class="title">1. Service</strong>
              <span></span>
            </a>
          </li>
          <li class="list-inline-item @if ($request['step'] == 2)
            active
          @endif">
            <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 2]) }}">
              <strong class="title">2. Choose Your Time</strong>
              <span></span>
            </a>
          </li>
          <li class="list-inline-item @if ($request['step'] == 3)
            active
          @endif">
            <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 3]) }}">
              <strong class="title">3. Details</strong>
              <span></span>
            </a>
          </li>
          <li class="list-inline-item @if ($request['step'] == 4)
            active
          @endif">
            <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 4]) }}">
              <strong class="title">4. Payment</strong>
              <span></span>
            </a>
          </li>
          <li class="list-inline-item @if ($request['step'] == 5)
            active
          @endif">
            <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 5]) }}">
              <strong class="title">5. Done</strong>
              <span></span>
            </a>
          </li>
        </ul>
        @include('partials.message')
        <div class="steps-container">
          <div class="step-box
          @if ($request['step'] != 0 && $request['step'] != 1)
            d-none
          @endif" id="step1">
          @if ($searchCount==0)
            <div class="box">
                <h3>Search result not found</h3>
            </div>
          @endif
          @foreach ($vendors as $vendor)
            <div class="box">
              <div class="top-frame">
                <div class="left-box">
                  <div class="image-frame"><img src="{{ url($vendor->img) }}" alt="image"></div>
                  <div class="text-box">
                    <h3>{{$vendor->name}}</h3>
                    <div class="metas">
                      <div class="rating-box">
                        <span>{{number_format($vendor->avgRating(),1)}}</span>
                        <div class="stars" data-stars="{{floor($vendor->avgRating())}}">
                          <svg height="25" width="23" class="star rating" data-rating="1">
                            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                          </svg>
                          <svg height="25" width="23" class="star rating" data-rating="2">
                            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                          </svg>
                          <svg height="25" width="23" class="star rating" data-rating="3">
                            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                          </svg>
                          <svg height="25" width="23" class="star rating" data-rating="4">
                            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                          </svg>
                          <svg height="25" width="23" class="star rating" data-rating="5">
                            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                          </svg>
                        </div>
                        {{-- <ul class="list-inline star-rating">
                          <li class="list-inline-item">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                              </svg>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                              </svg>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                              </svg>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                              </svg>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                              </svg>
                            </a>
                          </li>
                        </ul>
                         --}}
                        <span class="rating-count">{{$vendor->rating->count()}} ratings</span>
                      </div>
                      <span class="reviews-count">36 reviews</span>
                    </div>
                    <p>General Cleaning</p>
                    <strong class="location">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                      {{$vendor->location}}
                    </strong>
                  </div>
                </div>
                <form action="{{route('user.service.saveSession',['search' => $request['search'], 'step' => 1])}}" method="post" style="min-width: 98%;">
                  <div class="btns-box">
                    @csrf
                    <input type="hidden" name="service" value="{{$vendor->id}}">
                    <select class="custom-select" name="package" required>
                      @foreach ($vendor->package as $package)
                        <option value="{{$package->id}}">{{$package->name." - RM ".$package->price}}</option>
                      @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Request this vendor</button>
                  </div>
                </form>
              </div>
              <p>Last service completed on 29 Dec 2021</p>
            </div>
          @endforeach
          </div>
          <div class="step-box
          @if (isset($request['step']) && $request['step'] != 2)
            d-none
          @endif" id="step2">
          <form action="{{route('user.service.saveSession',['search' => $request['search'], 'step' => 2])}}" method="post">
            @csrf
            <div class="row justify-content-center mb-4">
              <div class="col-12 col-md-10 col-lg-8">
                <p class="text-center">Below you can find a list of available time slots for <strong>General Cleaning</strong> by <strong>Yes Maid Cleaning</strong> Click on a time slot to proceed with booking.</p>
                <div class="choose-block">
                  <div class="calendar-box">
                    <div id="calendar"></div>
                  </div>
                  <div class="date-time">
                    <input id="result" type="date" class="btn btn-primary" name="date" required>
                    <ul class="time-list list-unstyled">
                      @foreach ($slots as $slot_k => $slot)
                        <li>
                          <label for="time{{$slot_k}}" class="option-box">{{date("H:i a", strtotime($slot))}}
                            <input id="time{{$slot_k}}" type="radio" name="time" value="{{date("H:i:s", strtotime($slot))}}" required>
                            <span class="checkmark"></span>
                          </label>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                <div class="btns-bar d-flex justify-content-between align-items-center">
                  <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 1]) }}" class="btn btn-primary text-white text-uppercase">Back</a>
                  <button type="submit" class="btn btn-primary text-white text-uppercase">Next</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="step-box
          @if (isset($request['step']) && $request['step'] != 3)
            d-none
          @endif" id="step3">
          <form action="{{route('user.service.saveSession',['search' => $request['search'], 'step' => 3])}}" method="post" class="details-form">
            @csrf
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                @if (\Session::get('serviceSess') && \Session::get('timeSess'))
                  <p class="text-center">You selected a booking for <strong>{{\Session::get('serviceSess')['package']->name}} by {{\Session::get('serviceSess')['service']->name}}</strong> at <strong>{{ date("h:i a", strtotime(\Session::get('timeSess')['time'])) }}</strong> on <strong>{{ date("d/m/Y", strtotime(\Session::get('timeSess')['date'])) }}</strong>. The price for the service is <strong>RM{{\Session::get('serviceSess')['package']->price}}.</strong>Please provide your details in the form below to proceed with booking.</p>
                @endif
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{
                          \Session::get('userSess')?\Session::get('userSess')['name']:''}}" required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="form-group">
                        <label for="tel">Phone</label>
                        <input id="tel" type="tel" class="form-control" name="phone" value="{{
                          \Session::get('userSess')?\Session::get('userSess')['phone']:''}}" required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{
                          \Session::get('userSess')?\Session::get('userSess')['email']:''}}" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" cols="30" rows="10" class="form-control" name="address" minlength="10" maxlength="1000" required>{{
                          \Session::get('userSess')?\Session::get('userSess')['address']:''}}</textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea id="notes" cols="30" rows="10" class="form-control" name="notes" maxlength="1000">{{
                          \Session::get('userSess')?\Session::get('userSess')['notes']:''}}</textarea>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                <div class="btns-bar d-flex justify-content-between align-items-center">
                  <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 2]) }}" class="btn btn-primary text-white text-uppercase">Back</a>
                  <button type="submit" class="btn btn-primary text-white text-uppercase">Next</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="step-box
          @if (isset($request['step']) && $request['step'] != 4)
            d-none
          @endif" id="step4">
          <form action="{{ route('user.payment',['search' => $request['search'], 'step' => 4]) }}" method="post">
            @csrf
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-5">
                <p>Please tell us how you would like to pay:</p>

                <ul class="list-inline payment-options">
                  <li>
                    <label class="option-box">FPX (Online Banking)
                      <img class="fpx-logo" src="{{ url('theme/images/fpx-logo.png') }}" alt="fpx">
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                <div class="btns-bar d-flex justify-content-between align-items-center">
                  <a href="{{ route('user.index', ['search' => $request['search'], 'step' => 3]) }}" class="btn btn-primary text-white text-uppercase">Back</a>
                  <button type="submit" class="btn btn-primary text-white text-uppercase">Next</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="step-box
          @if (isset($request['step']) && $request['step'] != 5)
            d-none
          @endif" id="step5">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 text-center">
                <div class="icon"><img src="{{ url('theme/images/tick.png') }}" alt="tick"></div>
                <p>Thank you! Your booking is complete. An email with detail of your booking has been sent to you.</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                <div class="btns-bar d-flex flex-column">
                  <a href="#" class="btn btn-primary text-uppercase">view order</a>
                  <a href="#" class="btn btn-primary text-uppercase">chat with vendor</a>
                  <a href="#" class="btn btn-primary text-uppercase">make another booking</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
