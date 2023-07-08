<?php
// use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\User\Service;
use App\Http\Controllers\User\UserProfile;
use App\Http\Controllers\User\Review;

Route::get('/', [Service::class,'index'])->name('user.index');
Route::post('payment', [Service::class,'payment'])->name('user.payment');
Route::get('paymentStatus', [Service::class,'paymentStatus'])->name('user.paymentStatus');
Route::get('paymentCallback', [Service::class,'paymentStatus'])->name('user.paymentCallback');
Route::group(['prefix' => 'service'], function() {

  Route::post('session', [Service::class,'saveSession'])->name('user.service.saveSession');
  // Route::group(['prefix' => 'dashboard'], function() {
  //   Route::get('/', [Dashboard::class,'index'])->name('admin.dashboard.index');
  // });


}); // END Route::group
Route::group(['prefix' => 'profile'], function() {

  Route::get('/', [UserProfile::class,'index'])->name('user.profile');


}); // END Route::group

Route::group(['prefix' => 'dashboard'], function() {

  Route::get('/', [UserProfile::class,'dashboard'])->name('user.dashboard');


}); // END Route::group
Route::group(['prefix' => 'review'], function() {

  Route::get('/', [Review::class,'index'])->name('user.review');


}); // END Route::group


Route::get('about', function () {
    // return view('about');
})->name('about');
Route::get('our-services', function () {
    // return view('about');
})->name('our-services');
Route::get('contact', function () {
    // return view('contact');
})->name('contact');
