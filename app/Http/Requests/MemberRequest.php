<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends Request
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
                $rules['name'] = 'required|min:3|max:200';
                $rules['phone'] = 'required|max:65536';
                break;
            case $this->wantsToUpdate():
                $rules['name'] = 'required|min:3|max:200';
                $rules['phone'] = 'required|max:65536';
                break;
            default:
                $rules = [];
        }
        return $rules;
    }
}
