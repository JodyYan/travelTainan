<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function show(){
        $address=request()->get('address');
        $result=Travel::where('address', 'LIKE', '%' . $address . '%')->get();
        return $result;
    }
}
