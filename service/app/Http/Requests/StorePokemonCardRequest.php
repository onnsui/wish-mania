<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonCardRequest extends FormRequest
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
            'user_id' => 'required | exists:users, id',
            'name' => 'required | max:255',
            'expansion_mark_id' => 'required | exists:expansion_marks, id',
            'regulation_id' => 'required | exists:regulations, id',
            'list_no' => 'required | integer',
            'rarity_id' => 'required | exists:rarities, id',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'カード名',
            'expansion_mark_id' => 'エキスパンションマーク',
            'regulation_id' => 'レギュレーションマーク',
            'list_no' => 'リスト番号',
            'rarity_id' => 'レアリティ',
        ];
    }
}
