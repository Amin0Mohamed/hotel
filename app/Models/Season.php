<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{


    protected $table = 'seasons';
    public $timestamps = false;
    protected $fillable=['season_type','season_price','hotel_id'];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
}
