<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FindRequest extends FormRequest
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
            'qr_file'=>'required|mimes:jpeg,jpg,png',
        ];
    }
    function messages()
    {
        return [
            'qr_file.required' => 'Please upload QR code .',


        ];
    }
}
