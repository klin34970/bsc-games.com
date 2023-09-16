<?php

namespace App\Http\Controllers\Front\Form;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Form\ContactRequest;
use App\Models\Front\Form;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('front.forms.contact.index');
    }

    /**
     * @param ContactRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request){

        $validated = $request->validated();
        $form = new Form();

        /**
         * Against spam.
         * check if we have a record that match same subject and ip
         * in the last 30 minutes.
         */
        $lastForm = $form->whereBetween('created_at', [Carbon::now()->subMinutes(Form::FORM_SUBMIT_INTERVAL), Carbon::now()])
                          ->where('subject', $validated['subject'])
                          ->where('ip', $request->ip())
                          ->first();
        if($lastForm){
            $timeRemaining = Form::FORM_SUBMIT_INTERVAL - Carbon::parse($lastForm->created_at)->diffInMinutes(Carbon::now());
            return redirect()->route('form.contact.create')->with([
                'status' => Str::replaceFirst(':minutes', $timeRemaining,Form::FORM_SUBMIT_SPAM),
            ]);
        }


        $form->create($validated + [
           'status' => Form::STATUS_WAITING_TO_READ,
           'ip' => $request->ip()
        ]);

        return redirect()->route('form.contact.create')->with([
            'status' => Form::FORM_SUBMIT_SUCCESS,
        ]);
    }
}
