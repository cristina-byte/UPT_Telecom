<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'nume' => 'required',
            'prenume' => 'required',
            'pachet' => 'required',
            'email' => 'required|email:rfc,dns',
            'adresa' => 'required',
            'telefon' => 'required|digits:9',
            'start_date' => 'required',
            'durata' => 'required' 
        ];
    }


 


public function messages()
{
    return [
        'nume.required' => 'Campul nume este obligatoriu',
        'prenume.required' => 'Campul prenume este obligatoriu',
        'pachet.required' => 'Campul pachet este obligatoriu',
        'email.required' => 'Campul email este obligatoriu',
        'adresa.required' => 'Campul adresa este obligatoriu',
        'telefon.required' => 'Campul telefon este obligatoriu',
        'start_date.required' => 'Campul data incheiere contract este obligatoriu',
        'durata.required' => 'Campul durata contract este obligatoriu',
        'telefon.digits'=>'Campul telefon trebuie sa contina 9 cifre',
        'email.email:rfc'=>'Campul email trebuie sa contina o adresa de email valida'




    ];
}


}
