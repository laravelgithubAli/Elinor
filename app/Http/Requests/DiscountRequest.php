<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
            'value' => ['required','integer']
        ];
    }

    public function messages()
    {
        return [
          'value.required' => 'نوشتن میزان تخفیف الزامی است!',
          'value.integer' => 'میزان تخفیف باید از نوع عدد باشد!'
        ];
    }
}
