<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
            case 'PUT':
                return [
                    'start' => 'required|date_format:H:i',
                    'end' => 'required|date_format:H:i|after:start',
                ];
            default:
                return [];
        }
    }
}
