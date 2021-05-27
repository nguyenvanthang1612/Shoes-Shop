<?php

namespace App\Http\Requests\Admin;

use App\Rules\Admin\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class AccountCreate extends FormRequest
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
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'telephone' => ['required', 'numeric', new PhoneNumberRule],
            'avatar' => 'required|image'
        ];
    }
}
