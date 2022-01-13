<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
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
            'newpassword' => 'required|required_with:confirmpass|same:confirmpass|min:6|max:20',
            'confirmpass' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'newpassword.required' => 'Please enter new password',
            'newpassword.same' => 'Please confirm password',
            'newpassword.min' => 'Password can not be less than 6 characters',
            'newpassword.max' =>'Password can not more than 20 characters',
            'confirmpass.required' => 'Please confirm same as above'

        ];
    }
}
