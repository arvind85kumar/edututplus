<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttachStudent extends FormRequest
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
            'course_id' => 'required',
            'phone' => 'required|min:10|max:13'
        ];
    }

    public function messages(){
        return [
            'course_id.required' => 'Please select course',
            'phone' => 'Please enter registered mobile number.',
            'phone.min'=>'Phone number can not less than 10 digits',
            'phone.max' => 'Phone number can not more than 13 digits'

        ];
    }
}
