<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventBookingStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $eventId = Event::where('slug', $this->route('slug'))
            ->value('id');

        return [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('event_bookings', 'email')
                    ->where('event_id', $eventId),
            ],

            'phone' => ['required', 'string', 'max:30'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Полето :attribute е задължително.',
            'email.email' => 'Моля, въведете валиден имейл адрес.',
            'email.unique' => 'Вече има записване за това събитие с този имейл адрес.',
            'max' => 'Полето :attribute е твърде дълго.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Име',
            'email' => 'Имейл',
            'phone' => 'Телефон',
        ];
    }
}
