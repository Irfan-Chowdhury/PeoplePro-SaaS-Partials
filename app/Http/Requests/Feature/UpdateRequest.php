<?php

namespace App\Http\Requests\Feature;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'icon' => 'required|unique:features,icon,'.$this->feature_id.',id,deleted_at,NULL',
            'name' => 'required|unique:features,name,'.$this->feature_id.',id,deleted_at,NULL',
        ];
    }
}
