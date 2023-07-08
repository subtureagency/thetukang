<?php
// use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Service;
use App\Http\Controllers\Admin\Transaction;
use App\Http\Controllers\Admin\Rating;
use App\Http\Controllers\Admin\ReportTicket;
use App\Http\Controllers\Admin\Vendor;

Route::group(['prefix' => 'admin','middleware' => ['auth','verified','RoleVerify']], function() {

  // Route::group(['prefix' => 'dashboard'], function() {
  //   Route::get('/', [Dashboard::class,'index'])->name('admin.dashboard.index');
  // });
  Route::group(['prefix' => 'services'], function() {
    Route::get('/', [Service::class,'index'])->name('admin.service.index');
  });

  Route::group(['prefix' => 'vendors'], function() {
    Route::get('/', [Vendor::class,'index'])->name('admin.vendor.index');
  });

  Route::group(['prefix' => 'transaction'], function() {
    Route::get('/', [Transaction::class,'index'])->name('admin.transaction.index');
  });
  Route::group(['prefix' => 'rating'], function() {
    Route::get('/', [Rating::class,'index'])->name('admin.rating.index');
  });
  Route::group(['prefix' => 'report-ticket'], function() {
    Route::get('/', [ReportTicket::class,'index'])->name('admin.report-ticket.index');
  });


}); // END Route::group
