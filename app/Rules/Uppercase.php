<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string 
    {
        return ':attribute must be uppercase';
    }
    /**
    *Determine if the validation rule passes.
    *
    *@param  string  $attribute
    *@param  mixed  $value
    *@return bool
    */
    public function passes($attribute, $value){
        return true;
    }
    /**
     * Get the validation error message.
     * 
     * @return string
     */
    // public function message(){
    //     return '';
    // }
    public function __toString(){
        return $this->message();
    }
    
}

