<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'string',
            'price' => 'required|integer',
            'amount' => 'required|int'
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Tên không được để trống',
            'description.string' => 'Là một chuỗi',
            'price.required'   => 'Giá tiền không được để trống',
            'amount.required'  => 'Số lượng không được để trống',
            'amount.int'  => 'Giá trị nhập không đúng',
        ];
    }
}
