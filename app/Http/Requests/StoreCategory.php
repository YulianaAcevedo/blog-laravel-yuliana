<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;




class StoreCategory extends FormRequest
{
    public function authorize()
    {
        return true;
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:5|max:120',
            'slug'=>'required|min:5|max:500|unique:posts',
            'content'=>'required|min:7',
            'category_id'=>'required|integer|exists:categories.id',
            'description'=>'required|min:7|max:250',
            'posted'=>'required',
            

        ];
    }
}
