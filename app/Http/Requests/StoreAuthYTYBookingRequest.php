<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthYTYBookingRequest extends FormRequest
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
            "parcel-name" => "required|min:2|max:500|string",

            "sender-name" => "required|min:2|max:50|string",
            "sender-phone" => "required|min:2|max:15|string",
            "sender-city" => "required|min:2|max:50|string",
            "sender-township" => "required|exists:townships,id",
            "sender-address-detail" => "required|max:500|string",

            "receiver-name" => "required|min:2|max:50|string",
            "receiver-phone" => "required|min:2|max:15|string",
            "receiver-city" => "required|min:2|max:50|string",
            "receiver-township" => "required|exists:townships,id",
            "receiver-address-detail" => "required|max:500|string",

            "weight" => "required|integer|gte:1",
            "count" => "required|integer|gte:1"
        ];
    }
}
