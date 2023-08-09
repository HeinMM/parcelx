<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Phonenumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(substr($value,0,2 ) !== "09"){
            $fail('ဖုန်းနံပတ်ကို 09 ဖြင့် စပေးပါ ခင်ဗျာ');
        }
    }
}
