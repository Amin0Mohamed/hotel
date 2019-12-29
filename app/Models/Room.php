<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $table = 'rooms';
    public $timestamps = false;
    protected $fillable=['hotel_id','room_type_id','max_adults','max_children','beds','bathrooms','room_area','price'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function roomsType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

   }
