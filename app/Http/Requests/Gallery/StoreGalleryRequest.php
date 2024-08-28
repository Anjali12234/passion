<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title'=>['required','string'],
            'image' => ['required','image','mimes:png,jpg,jpeg'],
            'status' => ['nullable'],
        ];
    }
}
