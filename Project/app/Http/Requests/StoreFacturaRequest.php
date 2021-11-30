<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacturaRequest extends FormRequest
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
          'id_client' => 'required',
            'id_serviciu' => 'required',
            'pret' => 'required',
            'status' => 'required',
            'data_scadenta' => 'required'
        ];
    }


public function messages()
{
    return [
        'pret.required' => 'Campul pret este obligatoriu',
        'status.required' => 'Campul status este obligatoriu',
        'data_scadenta.required' => 'Campul data scandenta este obligatoriu'
    ];
}





}
