<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required'],
            'cost' => ['required','integer'],
            'image' => ['nullable'],
            'description' => ['required'],
            'inventory' => ['nullable','integer'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'انتخاب دسته بندی الزامی است!',
            'name.required' => 'نوشتن نام محصول الزامی است!',
            'cost.required' => 'نوشتن قیمت الزامی است!',
            'cost.integer' => 'قیمت باید از نوع عدد باشد!',
            'description.required' => 'نوشتن توضیح الزامی است!',
            'inventory.integer' => 'موجودی انبار باید از نوع عدد باشد!',
        ];
    }
}
