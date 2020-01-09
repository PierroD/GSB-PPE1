<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'company' => 'required|max:255',
            'gender' => 'required|in:M,W,O',
            'birth_date' => 'required',
            'mail' => 'required|email|unique:user|max:255',
            'password' => 'required|confirmed|max:255',
        ];
    }
}
