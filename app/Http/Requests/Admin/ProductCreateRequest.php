<?php

namespace App\Http\Requests\Admin;

use App\Rules\Admin\CapitalSentenceRule;
use App\Rules\ImagesRequired;
use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
        // dd(request()->all());
        return [
            'name' => ['required', new CapitalSentenceRule],
            'desc' => 'required',
            'SKU' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'img' => 'required'
        ];
    }
}
