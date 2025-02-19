<?php

namespace App\Http\Requests;

use App\Rules\CheckHandler;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','min:3','max:30'],
            'description'=>['nullable'],
            'handler'=>[
                'required',
                'starts_with:@',
                //'unique:users,handler,'.$this->user()->id,
                Rule::unique('users','handler')->ignore($this->user()),
                new CheckHandler()
            ],
        ];
    }
}
