<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFrontendRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|min:2|max:100',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute dữ liệu quá ít',
            'max' => ':attribute kích thước quá lớn',
            'email' => ':attribute phải là định dang email',
        ];
    }

    public function attributes()
    {

        return [
            'name' => 'Tên người dùng',
            'email' => 'Email người dùng',
            'phone' => 'Số điện thoại',
            'address' => 'Quê quán',
        ];
    }
}
