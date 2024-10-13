<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     * email:rfc,dns for make sure is default form like mr@yahoo.com
     */
    public function rules(): array
    {
        return [
            'name'      =>    'required|min:3|string',
            'email'     =>    'required|email|string|email:rfc,dns',
            'password'  =>     'required|min:5|max:8|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'where is name !!!',
            'email.email'     => 'Enter Valid Email',
            'password.min'    => 'paswword is so small'
        ];
    }
}
