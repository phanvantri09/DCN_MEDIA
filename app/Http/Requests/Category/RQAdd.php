<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class RQAdd extends FormRequest
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
            'title' => 'required',
            // 'img' => 'required',
            // 'content_pre' => 'required',
            // 'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập',
            // 'img.required' => 'Vui lòng nhập',
            // 'content_pre.required' => 'Vui lòng nhập',
            // 'content.required' => 'Vui lòng nhập',
        ];
    }
}
