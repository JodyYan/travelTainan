<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function show(){
        $address=request()->get('address');
        $result=Travel::where('address', 'LIKE', '%' . $address . '%')->paginate(5)->appends(['address' => $address]);
        return $result;
    }
}
