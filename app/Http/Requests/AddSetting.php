<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSetting extends FormRequest
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
        if(\Auth::user()->role_id == 1) {
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
            //
        ];
    }

    public function messages(){
        return [];
    }
}
