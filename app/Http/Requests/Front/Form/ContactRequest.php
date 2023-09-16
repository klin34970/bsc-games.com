<?php

namespace App\Http\Requests\Front\Form;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:32',
            'email' => 'required|email|max:128',
            'subject' => 'required|string|max:64',
            'message' => 'required|string',
            'category' => 'required|in:contact,airdrop'
        ];
    }
}
