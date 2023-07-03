<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|min: 3',
            'prenom' => 'required|min: 3',
            'email' => 'required|email|unique:users ',
            'sous_couver' => 'required|min: 3',
        ];
    }
    public function messages()
    {
        return [
            'nom.required' => 'le champ nom est requis',
            'nom.min' => 'le champ nom doit contenir au moin 3 caractéres',
            'prenom.required' => 'le champ prenom est requis',
            'email.required' => 'le champ email est requis',
            'email.unique' => 'le mail est déja a un utilisateur',
            'sous_couver.required' => 'le champ sous couver est requis'
        ];
    }
}
