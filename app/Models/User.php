<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\RoleUser;
use App\Models\Role;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'receive_notifications',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
      try {
        $roleUser = RoleUser::where('user_id', $this->id)->first();
        $role = Role::find($roleUser['role_id']);
        return $role['name'];

      } catch (\Exception $e) {
        return "RoleUser is null";
        $response = [
          'note' => 'RoleUser is null. Please insert data to RoleUser for user '.$this->id,
          'message' => $e->getMessage(),
          'file' => $e->getFile(),
          'line' => $e->getLine(),
        ];
        \Log::debug($response);
      }
    }

    public function vendor()
    {
      return $this->belongsTo(Vendor::class);
    }
}
