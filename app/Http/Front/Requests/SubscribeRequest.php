<?php

namespace App\Http\Front\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubscribeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['email'],
        ];
    }
}
