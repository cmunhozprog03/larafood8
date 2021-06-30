<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePlan extends FormRequest
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
            'name' => ['required', 'unique:plans'],
            'price' => ['required'],
            'description' => ['nullable', 'min:3', 'max:500']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O campo NOME é obrigatório.',
            'name.unique' => 'Já existe outro registro com este nome.',
            'price.required' => 'O campo PREÇO é obrigatório.',
            'description.min' => 'O campo deve conter no mínimo :min caracteres',
            'description.max' => 'O campo deve conter no máximo :max caracteres',

        ];
    }
}
