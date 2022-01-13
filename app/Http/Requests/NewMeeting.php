<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMeeting extends FormRequest
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
            'course_id' => 'required',
            'meeting_title' => 'required|min:5|max:50'
        ];
    }

    public function messages(){
        return [
            'course_id.required' => 'Please choose course',
            'meeting_title.required' => 'Please enter meeting title',
            'meeting_title.min' => 'Meeting title should be more than 5 characters',
            'meeting_title.max' => 'Meeting title should be not more than 50 characters'
        ];
    }
}
