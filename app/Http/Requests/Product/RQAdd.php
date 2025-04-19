<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required',
            'img'=>'required',
            'amount'=>'required',
            'price'=>'required',
            // 'content'=>'required',
            'id_category' => 'required'
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập',
            'img.required' => 'Vui lòng nhập',
            'amount.required' => 'Vui lòng nhập',
            'price.required' => 'Vui lòng nhập',
            // 'content.required' => 'Vui lòng nhập',
            'id_category.required' => 'Vui lòng nhập',
        ];
    }
}
