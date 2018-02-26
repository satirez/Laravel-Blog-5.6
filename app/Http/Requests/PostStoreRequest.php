<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // ACTIVA LA VALIDACIÓN
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $rules = [
            'name'          => 'required',
            'slug'          => 'required|unique:posts,slug',
            'user_id'       => 'required|integer',
            'category_id'   => 'required|integer',
            'tags'          => 'required|array',
            'body'          => 'required',
            'status'        => 'required|in:DRAFT,PUBLISHED',     
        ];

         // Array base, pero si mandamos algo en file, agregamos un item más 
        if($this->get('image'))        
            $rules = array_merge($rules, ['image'         => 'mime:jpg,jpeg,png']);
        return $rules;
    }
}
