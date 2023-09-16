<?php

namespace App\Http\Requests\Games\BNBomb;

use Illuminate\Foundation\Http\FormRequest;

class ScoreRequest extends FormRequest
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
            'chain_id' => 'required|string',
            'wallet_id' => 'required|string',
            'trx_id' => 'required|string',
            'round' => 'required|integer',
            'score' => 'required|integer',
            'round_start' => 'required|integer',
            'round_end' => 'required|integer',
        ];
    }
}
