<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname'=>'required',
            'email'=>'required|email',
            'postcode'=>'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address'=>'required',
            'building_name'=>'nullable',
            'opinion'=>'required|max:120',
        ];
    }

    public function messages()
    {
        return[
            'fullname.required' => '必ず入力してください',
            'email.required' => '必ず入力してください',
            'email.email' => 'メールアドレスの形式にしてください',
            'postcode.required' => '必ず入力してください',
            'postcode.regex' => '例のように入力してください',
            'address.required' => '必ず入力してください',
            'opinion.required' => '必ず入力してください',
            'opinion.max' => '文字数が多いです'
        ];
    }

}
