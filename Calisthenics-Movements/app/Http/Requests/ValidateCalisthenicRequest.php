<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ValidateCalisthenicRequest extends FormRequest
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
        $this->difficulty_categories = array('easy', 'medium', 'hard', 'expert');

        return [
            'name' =>'required|max:30|min:5|string',
            'description' =>'required|max:200|min:5|string',
            'repetation' =>'required|integer',
            'sequency' =>'required|integer',
            'difficulty' =>'required|in:' . implode(',', $this->difficulty_categories),
            'muscle_group' =>'required|max:30|min:5|string',
            'i_know' =>'boolean',
        ];
    }

}
