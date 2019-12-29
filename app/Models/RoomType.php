<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{

    protected $table = 'room_types';
    public $timestamps = false;
    protected $fillable = ['type_name','description','room_type_id'];

    public function rooms()
    {
        return $this->hasMany(Room::class,'room_type_id');
    }
}
