<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHeaderNavigationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'link_url' => 'required|string|max:255',
            'is_dropdown' => 'required|boolean',
            'parent_id' => 'string',
            'show' => 'required|boolean',
            'edit' => 'required|boolean',
            'delete' => 'required|boolean',
        ];
    }
}
