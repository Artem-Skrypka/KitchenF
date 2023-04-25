<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'recipeName' => 'required|string|unique:recipes,title|max:255',
            'ingredients.*.name' => 'required|string',
            'ingredients.*.mass' => 'required|int',
            'description' => 'string|nullable'
        ];
    }
}
