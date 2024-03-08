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
            'category_id' => 'required|integer',
            'first' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'content' => 'required|string|max:120',
        ];

        if ($this->isMethod('post') && $this->route()->getName() == 'confirm') {
            $rules['area'] = 'required|numeric|digits_between:1,5';
            $rules['prefix'] = 'required|numeric|digits_between:1,5';
            $rules['line'] = 'required|numeric|digits_between:1,5';
        }

        else if ($this->isMethod('post') && $this->route()->getName() == 'store') {
            $rules['tel'] = 'required|string';
        }
    }

    public function messages()
    {
        return[
            'first.required' =>'姓を入力してください',
            'first.string' =>'名前を文字列で入力してください',
            'last.required' =>'名を入力してください',
            'last.string' =>'名前を文字列で入力してください',
            'email.required' =>'メールアドレスを入力してください',
            'email.email' =>'メールアドレスはメール形式で入力してください',

            'area.required' =>'電話番号を入力してください',
            'area.numeric' => '電話番号のエリアコードは数字で入力してください',
            'area.digits_between' => '電話番号のエリアコードは5桁までの数字で入力してください',

            'address.required' =>'住所を入力してください',
            'category_id.required' =>'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容は120文字以内で入力してください。',


        ];
    }
}
