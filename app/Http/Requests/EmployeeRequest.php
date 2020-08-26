<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'min:10|max:10',
            'email' => 'email:rfc,dns|unique:App\Employee,email',
            'company_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'company_id.required' => 'The company must be selected',
            'company_id.numeric' => 'The company must be selected'
        ];
    }
}
