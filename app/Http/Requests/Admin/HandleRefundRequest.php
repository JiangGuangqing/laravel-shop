<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HandleRefundRequest extends FormRequest
{
    public function rules()
    {
        return [
            'agree' => ['required', 'boolean'],
            'reason' => ['required_if:agree,false'],
        ];
    }
}
