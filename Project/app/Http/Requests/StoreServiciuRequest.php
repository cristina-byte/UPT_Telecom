<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiciuRequest extends FormRequest
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
            'nivel' => 'required',
            'tip' => 'required',
            'pret' => 'required',
            'descriere' => 'required'
        ];
    }


public function messages()
{
    return [
        'pret.required' => 'Campul pret este obligatoriu',
        'tip.required' => 'Campul tip serviciu este obligatoriu',
        'nivel.required' => 'Campul nivel este obligatoriu',
        'descriere.required' => 'Campul descriere este obligatoriu'

    ];
}


}
