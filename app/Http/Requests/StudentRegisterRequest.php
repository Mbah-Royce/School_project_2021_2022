<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegisterRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'gender' => 'required',
            'email' => 'required|string|email',
            'dob' => 'required|date',
            'phone' => 'required|numeric',
            'CurrAdd' => 'required|max:255',
            'PermAdd' => 'required|max:255',
            'father_name' => 'required|max:255',
            'mother_name' => 'required|max:255'
        ];
    }
}
