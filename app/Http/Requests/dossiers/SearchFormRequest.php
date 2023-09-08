<?php

namespace App\Http\Requests\dossiers;

use Illuminate\Foundation\Http\FormRequest;

class SearchFormRequest extends FormRequest
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
            'date_entretien' => ['date', 'nullable'],
            'session_id' => ['numeric', 'gte:0', 'nullable'],
            'etat' => ['string', 'nullable'],
        ];
    }
}
