<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    public $timestamps = false;
    protected $fillable = array('title','address','city_id','description','phone','mobile','email','lattitude','longitude','rating','rate_count');


    public function clients()
    {
        return $this->hasMany(Client::class, 'hotel_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'hotel_id');
    }
    public function seasons()
    {
        return $this->hasMany(Season::class, 'hotel_id');
    }

    public function meals()
    {
        return $this->hasMany(Meal::class, 'hotel_id');
    }


}
