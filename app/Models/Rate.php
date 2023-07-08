<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Models\Service;


class Rate extends Model
{
  use SoftDeletes;

  protected $table = 'rating';
  protected $fillable = [
    'vendor_id',
    'score',
    'review',
    'status',
  ];

}
