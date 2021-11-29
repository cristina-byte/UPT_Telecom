<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTichetRequest extends FormRequest
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
            'responsabil' => 'required',
            'client' => 'required',
            'urgenta' => 'required',
            'status' => 'required',
            'descriere' => 'required',
            'd_raportare' => 'required' 
        ];
    }


public function messages()
{
    return [
        'responsabil.required' => 'Campul responsabil este obligatoriu',
        'client.required' => 'Campul client este obligatoriu',
        'urgenta.required' => 'Campul urgenta este obligatoriu',
        'status.required' => 'Campul status este obligatoriu',
        'descriere.required' => 'Campul descriere este obligatoriu',
        'd_raportare.required' => 'Campul data raportare este obligatoriu'
        
    ];
}


}
