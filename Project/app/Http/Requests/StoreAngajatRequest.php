<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAngajatRequest extends FormRequest
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
            'adresa' => 'required|string',
            'telefon' => 'required|digits:9',
            'email' => 'required|email:rfc,dns',
            'salariu' => 'required|digits',
            'functie' => 'required|string',
            'id_departament' => 'required'
        ];
    }



public function messages()
{
    return [
        'nume.required' => 'Campul nume este obligatoriu',
        'prenume.required' => 'Campul prenume este obligatoriu',
        'email.required' => 'Campul email este obligatoriu',
        'adresa.required' => 'Campul adresa este obligatoriu',
        'telefon.required' => 'Campul telefon este obligatoriu',
        'salariu.required' => 'Campul salariu este obligatoriu',
        'functie.required' => 'Campul functie este obligatoriu',
        'id_departament'=>'Campul telefon trebuie sa contina 9 cifre',
         'telefon.digits'=>'Campul telefon trebuie sa contina 9 cifre',
          'functie.digits'=>'Campul functie nu poate contine cifre'
      



    ];
}





}
