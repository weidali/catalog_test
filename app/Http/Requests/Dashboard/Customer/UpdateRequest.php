<?php

namespace App\Http\Requests\Dashboard\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|min:2|max:256',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required | numeric | digits:11 | starts_with:0,1',
            'photo' => 'required|image|mimes:jpg,png|max:5120',
        ];
    }
}
