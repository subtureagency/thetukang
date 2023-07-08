@extends('layouts.master')
@section('content')
  <!-- Visual Area -->
  <div class="visual-area">
    <div class="description position-absolute">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
          <div class="col-12 col-md-8">
            <h1 class="text-center text-white text-uppercase m-0">Leave Review</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="image-holder"><img src="{{ url('theme/images/banner.jpg') }}" alt="banner"></div>
  </div>

  <div class="form-holder">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">
          <h2 class="text-center text-capitalize">Order: #10001</h2>
          <div class="form-box">
            <strong class="form-title">Rate Your Experience With Yes Maid Cleaning</strong>
            <ul class="list-inline star-rating">
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
            <form action="#">
              <div class="form-group">
                <label for="title" class="label">Review Title</label>
                <div class="form-field">
                  <input id="title" type="text" class="form-control" placeholder="Ex. Job Done successfully">
                  <span>0/30</span>
                </div>
              </div>
              <div class="form-group">
                <label for="review" class="label">Write Review</label>
                <div class="form-field">
                  <input id="review" type="text" class="form-control" placeholder="Write your Work Experiences">
                  <span>0/300</span>
                </div>
              </div>
              <div class="form-group">
                <label for="file" class="upload-file">
                  <input id="file" type="file">
                  <span class="file">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="20" height="21.82" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1408 1536"><g transform="translate(1408 0) scale(-1 1)"><path d="M1404 1257q0 117-79 196t-196 79q-135 0-235-100L117 656Q4 541 4 385q0-159 110-270T383 4q158 0 273 113l605 606q10 10 10 22q0 16-30.5 46.5T1194 822q-13 0-23-10L565 205q-79-77-181-77q-106 0-179 75t-73 181q0 105 76 181l776 777q63 63 145 63q64 0 106-42t42-106q0-82-63-145L633 531q-26-24-60-24q-29 0-48 19t-19 48q0 32 25 59l410 410q10 10 10 22q0 16-31 47t-47 31q-12 0-22-10L441 723q-63-61-63-149q0-82 57-139t139-57q88 0 149 63l581 581q100 98 100 235z" fill="#72baaf"/></g></svg>
                    Attach Photo
                  </span>
                </label>
              </div>
              <input type="submit" class="btn btn-primary" value="Publish review">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
