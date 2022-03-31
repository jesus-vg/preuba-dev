<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * https://laravel.com/docs/9.x/validation#customizing-the-error-messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     * https://laravel.com/docs/9.x/validation#customizing-the-validation-attributes
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'     => 'nombre',
            'password' => 'contraseña',
        ];
    }
}
