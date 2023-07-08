<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Package extends Model
{
  use SoftDeletes;

  protected $table = 'package';
  protected $fillable = [
    'vendor_id',
    'name',
    'price',
    'img',
  ];

}
