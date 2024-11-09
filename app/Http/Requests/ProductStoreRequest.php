<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_id' => 'required|string|unique:products,product_id|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'price' => 'required|decimal:2|min:0',
            'stock' => 'nullable|integer|min:0',
            'image' => 'nullable|mimes:png,jpg|max:1024',
        ];
    }
}
