<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrderDetail extends Model
{
  use SoftDeletes;

  protected $table = 'order_details';
  protected $fillable = [
    'user_id',
    'vendor_id',
    'order_id',
    'status',
    'time',
    'date',
    'verified_at',
  ];

}
