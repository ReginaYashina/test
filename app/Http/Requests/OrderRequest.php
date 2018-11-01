<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
           
			'fio'=>'required|max:100|min:5',
			'email'=>'required|max:100',
			'phone'=>'required|min:7',
			'adress'=>'required|max:100'
			
			
			
        ];
    }
}
