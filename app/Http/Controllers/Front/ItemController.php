<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Item;

class ItemController extends Controller
{
    public function show($uuid){
        return view('front.item.show');
    }
}
