<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //ここに記載するルールをバリデーションという
            /*リクエストで送られてくる内容について、
            文字の型や内容、文字数など様々なルールを設定できる
            */
            'post.title' => 'required|max:40',
            'post.body' => 'required|max:4000'
        ];
    }
}
