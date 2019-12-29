<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetCityController extends Controller
{
    public function getCity($id)
    {
        $cities = City::where('country_id',$id)->get();
        $data='';
        foreach ($cities as $citie ){
            $data .= ' <option value='.$citie->id.'>'.$citie->name.'</option><br>';
        }
        return $data;

    }
}
