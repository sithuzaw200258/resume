<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDetailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => "required|min:2|max:100",
            'position' => "required|min:2",
            'objective' => "required|min:5",
            'photo' => 'required|mimes:png,jpg,jpeg|file|max:5000',
            'email' => "required|email",
            'phone' => "required|digits_between:6,11",
            'address' => "required",
        ];
    }
}
