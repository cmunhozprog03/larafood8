<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProfile extends FormRequest
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
        $id = $this->segment(3);
        return [
            'name' => ['required', "unique:plans,name,{$id},id"],
            'description' => ['nullable', 'min:3', 'max:200']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O campo NOME é obrigatório.',
            'name.unique' => 'Já existe outro registro com este nome.',
            'description.min' => 'O campo deve conter no mínimo :min caracteres',
            'description.max' => 'O campo deve conter no máximo :max caracteres',

        ];
    }
}
