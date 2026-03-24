<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:10',
            'whatsapp' => 'required|string|max:20',
            'message' => 'nullable|string|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'whatsapp.required' => 'Please enter your WhatsApp number.',
            'message.max' => 'Message cannot exceed 1000 characters.',
        ];
    }
}
