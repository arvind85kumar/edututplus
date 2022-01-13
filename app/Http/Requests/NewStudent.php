<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewStudent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(\Auth::user() == null) {
            return false;
        }
        if(\Auth::user()->role_id == 3) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'course_id' =>'required',
            'name' => 'required|min:3|max:50',
            'password' => 'required|min:5|max:20',
            'phone' => 'required|min:10|max:13|unique:users'
            
        ];
    }

    public function messages()
    {
        return [
            'course_id.required' => 'Please choose course',
            'name.required' => 'Please enter name',
            'name.min' => 'Name can not less than 3 characters',
            'name.max' =>'Name can not more than 20 characters',
            'password.required' => 'Please enter password',
            'password.min' => 'Password can not less than 5 characters',
            'password.max' =>'Password can not more than 20 characters',
            'phone.required' => 'Please enter phone number',
            'phone.min' =>'Phone no can not less than 10 digits',
            'phone.max' => 'Phone no can nor greater than 13 digits',
            'phone.unique' => 'Your phone is already registered'
           
        ];
    }
}
