<?php
use App\Http\Controllers\Vendor\Dashboard;

Route::group(['prefix' => 'vendor'], function() {
  Route::get('/', [Dashboard::class,'dashboard'])->name('vendor.dashboard');
}); // END Route::group
