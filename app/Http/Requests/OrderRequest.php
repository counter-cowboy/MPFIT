<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'customer_name' => ['required', 'string'],
            'product_id' => ['required', 'integer'],
            'comment' => ['required', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
