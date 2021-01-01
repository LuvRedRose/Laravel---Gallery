<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'image' => 'required|image',
            'description' => 'required',
            'categories_id' => 'required|integer|exists:categories,id',
            'locations_id' => 'required|integer|exists:locations,id',
            'most' => 'required|boolean'
        ];
    }
}
