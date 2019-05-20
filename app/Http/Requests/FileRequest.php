<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends Request
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
                $rules['title'] = 'required|min:3|max:200|unique:files,title';
                $rules['file'] = 'required|max:65536';
                break;
            case $this->wantsToUpdate():
                $rules['title'] = 'required|min:3|max:200|unique:files,title,' . $this->file;
                break;
            default:
                $rules = [];
        }
        return $rules;
    }
}
