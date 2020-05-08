<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required|unique:articles,title,'.$id,
            'content'=>'required',
            'cate_id'=>'not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'标题不能为空',
            'title.unique'=>'标题不能重复',
            'content.required'=>'文章内容不能为空',
            'cate_id.not_in'=>'文章分类不能为空',
        ];
    }
}
