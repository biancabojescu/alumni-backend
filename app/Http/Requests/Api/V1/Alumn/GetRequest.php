<?php

namespace App\Http\Requests\Api\V1\Alumn;

use Illuminate\Foundation\Http\FormRequest;

class GetRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'anul_alumnizarii' => 'nullable|string',
            'page' => ['nullable', 'integer'],
            'per_page' => ['nullable', 'integer'],
        ];
    }
}
