<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgentRequest extends FormRequest
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
            'mle' => 'required|unique:agents',
            'nom' => 'required|regex:/^[\pL\s\-]+$/u',
            'prenom' => 'required|regex:/^[\pL\s\-]+$/u',
            'affectation' => 'required',
            'diplome' => 'nullable',
            'observation' => 'nullable'
           
        ];
    }
}
