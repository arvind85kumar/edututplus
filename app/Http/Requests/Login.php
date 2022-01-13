<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
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
            'mobile' => 'required|min:10|max:13',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'mobile.required' => 'Please enter mobile number',
            'mobile.min' => 'Mobile number can not less than 10 digits',
            'mobile.max' => 'Mobile number can not more than 13 digits',
            'password.required' => 'please enter password'
        ];
    }
}
