<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name' => 'required',
            'img'=>'required',
            'position'=>'required',
            'filter'=>'required'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Name is required',
            'img.required'=>'Image is required',
            'position.required'=>'Position is required',
            'filter.required'=>'Filter is required',
        ];
    }
}
