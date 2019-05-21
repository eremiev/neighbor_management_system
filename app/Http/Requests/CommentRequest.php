<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends Request
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
                $rules['message'] = 'required';
                break;
            case $this->wantsToUpdate():
                $rules['message'] = 'required' . $this->comment;
                break;
            default:
                $rules = [];
        }
        return $rules;
    }
}
