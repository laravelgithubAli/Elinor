<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'propertygroup_id' => ['required','exists:propertygroups,id'],
            'title' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'propertygroup_id.required' => 'نوشتن دسته والد الزامی است!',
            'title.required' => 'نوشتن عنوان الزامی است!',
        ];
    }
}
