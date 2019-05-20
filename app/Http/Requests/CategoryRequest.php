<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends Request
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
        switch (true) {
            case $this->wantsToStore():
                $rules['name'] = 'required|max:200|unique:categories,name';
                break;
            case $this->wantsToUpdate():
                $rules['name'] = 'required|max:200|unique:categories,name,' . $this->category;
                break;
            default:
                $rules = [];
        }
        return $rules;
    }
}
