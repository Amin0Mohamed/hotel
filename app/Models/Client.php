<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ClientResetPasswordNotification;

class Client extends Authenticatable
{
    use Notifiable;

    protected $guard='client';
    //reservation request

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('first_name','last_name','phone','mobile','dob','email','password','hotel_id');


    protected $hidden = [
        'password', 'remember_token','api_token'
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function hotel()
    {
      return $this->belongsTo(Hotel::class, 'hotel_id');
    }

}
