<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Models\Service;
use App\Models\Rate;


class Vendor extends Model
{
  use SoftDeletes;

  protected $table = 'vendor';
  protected $fillable = [
    'name',
    'location',
    'img',
  ];

  public function user()
  {
    return $this->hasMany(User::class);
  }
  public function package()
  {
    return $this->hasMany(Package::class);
  }
  public function rating()
  {
    return $this->hasMany(Rate::class);
  }
  public function avgRating()
  {
    return $this->rating->avg('score');
  }

}
