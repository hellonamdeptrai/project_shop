<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'password' => 'required|min:8|max:100',
            'avatar' => 'required||max:2048',
            'permission' => 'required|in:1,2,3',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute dữ liệu quá ít',
            'max' => ':attribute kích thước quá lớn',
            'in' => ':attribute phải chọn mục trong list',
            'email' => ':attribute phải là định dang email',
        ];
    }

    public function attributes()
    {

        return [
            'name' => 'Tên người dùng',
            'email' => 'Email người dùng',
            'password' => 'Mật khẩu',
            'avatar' => 'Avatar',
            'permission' => 'Quyền',
        ];
    }
}
