<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Only authenticated users can create/update conferences
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'participants_count' => ['required', 'integer', 'min:0'],
        ];
    }

    /**
     * Get custom validation messages
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => __('validation.required', ['attribute' => __('messages.title')]),
            'title.max' => __('validation.max.string', ['attribute' => __('messages.title'), 'max' => 255]),
            'description.required' => __('validation.required', ['attribute' => __('messages.description')]),
            'date.required' => __('validation.required', ['attribute' => __('messages.date')]),
            'date.date' => __('validation.date', ['attribute' => __('messages.date')]),
            'date.after_or_equal' => __('validation.after_or_equal', ['attribute' => __('messages.date'), 'date' => __('messages.today')]),
            'address.required' => __('validation.required', ['attribute' => __('messages.address')]),
            'city.required' => __('validation.required', ['attribute' => __('messages.city')]),
            'participants_count.required' => __('validation.required', ['attribute' => __('messages.participants_count')]),
            'participants_count.integer' => __('validation.integer', ['attribute' => __('messages.participants_count')]),
            'participants_count.min' => __('validation.min.numeric', ['attribute' => __('messages.participants_count'), 'min' => 0]),
        ];
    }
}
