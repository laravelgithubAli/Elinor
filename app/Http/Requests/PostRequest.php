<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'postcategory_id' => ['required'],
            'title' => ['required'],
            'body' => ['required'],
            'studytime' => ['required'],
            'creator' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'postcategory_id.required' => 'نوشتن دسته بندی الزامی است!',
            'title.required' => 'نوشتن عنوان پست الزامی است!',
            'body.required' => 'نوشتن متن پست الزامی است!',
            'studytime.required' => 'نوشتن زمان مطالعه الزامی است!',
            'creator.required' => 'نوشتن نویسنده الزامی است!',
        ];
    }
}
