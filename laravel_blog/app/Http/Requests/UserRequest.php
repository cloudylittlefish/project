<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            //验证时跳过这个id的username
            'username'=>'required|unique:users,username,'.$id,
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'用户名不能为空',
            'username.unique'=>'用户名不能重复',
            'password.required'=>'密码不能为空',
        ];
    }
}
