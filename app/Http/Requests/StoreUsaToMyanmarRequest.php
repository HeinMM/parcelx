<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsaToMyanmarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "sender-name" => "required|min:2|max:50|string",
            "sender-phone" => "required|min:2|max:30|string",

            "receiver-name" => "required|min:2|max:50|string",
            "receiver-phone" => "required|min:2|max:30|string",
            "receiver-address" => "required|max:500|string",
        ];
    }
}
