<?php

namespace App\Http\Requests\Admin;

use App\Rules\Admin\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
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
            'password' => ['required', new MatchOldPassword],
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ];
    }
}
