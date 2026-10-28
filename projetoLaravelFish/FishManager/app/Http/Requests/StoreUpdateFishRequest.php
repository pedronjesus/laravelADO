<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFishRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
            'weight' => 'nullable|numeric|min:0',
            'tank_code' => 'nullable|string|max:50',
            'status' => 'required|in:ativo,inativo,quarentena',
        ];
    }
}