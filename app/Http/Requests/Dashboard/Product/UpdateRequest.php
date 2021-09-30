<?php

namespace App\Http\Requests\Dashboard\Product;

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
            'sku' => 'required|unique:products,sku,' . $this->product->id,
            'description' => 'required|min:2|max:256',
            'price' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpg,png|max:5120',
        ];
    }
}
