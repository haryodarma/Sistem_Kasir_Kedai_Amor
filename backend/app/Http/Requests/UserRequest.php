<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $rules = [
            "username" => "required|string|max:255|unique:users,username",
            "email" => "required|email|max:255|unique:users,email",
            "password" => "required|string|min:6",
            "role" => "required|in:owner,customer",
        ];
        if ($this->isMethod('PATCH')) {
          
            $rules['username'] = "sometimes|string|max:255" ;
            $rules['email'] = "sometimes|email|max:255";
            $rules['password'] ="sometimes|string|min:6";
            $rules['role'] = "sometimes|in:owner,customer";  
        }
        return $rules;
    }
}
