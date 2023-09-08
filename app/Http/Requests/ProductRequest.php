<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name'=>'required|min:6',
            'product_price'=>'required|integer'
        ];
    }
    public function message(){
        return [
            'product_name.required'=>':attribute gdjfgsdjf',
            'product_name.min'=>'đâsdasdasd',
        ];
    }
    public function attribute(){
        return ['product_name'=>'tên'];
    }

    protected function prepareForValidation(){
        $this->merge([
            'create'=>date('Y-m-d H-i:s')
        ]);
    }

    
}
