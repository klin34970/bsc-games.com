<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
class FaqController extends Controller
{
    public function __invoke(){
        return view('front.faq.index');
    }
}
