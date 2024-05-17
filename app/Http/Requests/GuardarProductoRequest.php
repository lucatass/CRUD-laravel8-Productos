<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarProductoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'peso_unitario_gr' => 'required|numeric',
            'cantidad' => 'required|integer',
            'perecedero' => 'boolean',
        ];
    }
}
