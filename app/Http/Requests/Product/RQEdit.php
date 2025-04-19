<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class RQEdit extends FormRequest
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
            'amount'=>'required',
            'price'=>'required',
            // 'content'=>'required',
            'id_category' => 'required'
        ];

    }
    public function messages()
    {
        return [
            'name'=>'required',
            'amount'=>'required',
            'price'=>'required',
            // 'content'=>'required',
            'id_category' => 'required'
        ];
    }
}
