<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'custom_name' => ['required'],
            'order_date' => ['required', 'date'],
            'status' => ['required'],
            'comment' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
