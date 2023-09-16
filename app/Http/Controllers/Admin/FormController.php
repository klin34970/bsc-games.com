<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Front\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        $forms = new Form();
        /*
         * FILTERS
         */
        if($status = $request->get('status')){
            $forms = $forms->where('status', $status);
        }
        if($category = $request->get('category')){
            $forms = $forms->where('category', $category);
        }
        /*
         * PAGINATE
         */
        $forms = $forms->paginate(20);
        return view('admin.forms.index')->with([
            'forms' => $forms
        ]);
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
