<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'cate_name'=>'required|unique:cates,cate_name,'.$id,
        ];
    }

    public function messages()
    {
        return [
            'cate_name.required'=>'分类名不能为空',
            'cate_name.unique'=>'分类名不能重复',
        ];
    }
}
