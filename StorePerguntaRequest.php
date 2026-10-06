<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerguntaRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'texto' => [
                'required',
                'string',
                'min:10',
                'max:255',
            ],

            'evento_id' => [
                'required',
                'exists:eventos,id',
            ],
        ];
    }
}
