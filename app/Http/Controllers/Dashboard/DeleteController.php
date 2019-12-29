<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    function delete($id)
    {
        $country = Country::find($id);
        $country->delete();

       $data='';
        foreach (Country::all() as $c){
            $data.='
                <tr>
                    <td>'.$c->id.'</td>
                    <td>'.$c->name.'</td>
                    <td>
                        <a class="btn btn-success" href="{{route(\'dashboard.countries.edit\',[\'id\'=> $country->id])}}"><i class="fa fa-edit fa-1x"></i></a>
                    </td>
                    <td>                                                
                        <button id="'.$c->id.'"
                                data-token="{{csrf_token()}}"
                                data-route="{{url(\'dashboard/delete-country/\''.$c->id.')"
                                type="button"
                                class="delete btn btn-danger">
                            <i class="fa fa-trash fa-1x"></i>
                        </button>
                    </td>
                </tr>
            ';
        }
        return $data;
    }
}
