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
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'nim'  => ['required', 'string', 'min:11', 'max:15'],
            'img'  => ['required', 'mimes:png,jpg,jpeg'],
            'job'  => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
}
