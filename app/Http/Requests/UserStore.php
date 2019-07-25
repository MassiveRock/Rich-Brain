<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/|unique:users',
            'upass' => 'required|regex:/^[\w]{6,18}$/',
            'repass' => 'required|same:upass',
            'email' => 'required|email',
            'phone' => 'required|regex:/^1[3-9]{1}[\d]{9}$/',
        ];
    }

    public function messages()
    {
        return [
            'uname.required'=>'用户名必填',
            'uname.unique'=>'用户名已存在',
            'uname.regex'=>'请以字母开头，数字结尾7~15位的用户名',
            'upass.required'=>'密码必填',
            'upass.regex'=>'请输入6~18位任意字符密码',
            'repass.required'=>'确认密码必填',
            'repass.same'=>'两次密码不一致',
            'email.required'=>'邮箱必填',
            'email.email'=>'邮箱格式错误',
            'phone.required'=>'手机号必填',
            'phone.regex'=>'手机号格式错误',
        ];
    }
}
