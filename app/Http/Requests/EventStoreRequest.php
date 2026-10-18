<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['string', 'max:255', 'unique:events,slug'],

            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],

            'location' => ['required', 'string', 'max:255'],
            'capacity' => ['required', 'integer', 'min:1'],
            'host' => ['required', 'string', 'max:255'],

            'starts_at' => ['required', 'date'],
            'ends_at' => ['required', 'date', 'after:starts_at'],

            'duration' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'numeric', 'min:0', 'decimal:0,2'],

            'type' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],

            'is_active' => ['required', 'boolean'],
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'required' => 'Полето :attribute е задължително.',
            'image.image' => 'Моля, качете валидно изображение.',
            'image.mimes' => 'Снимката трябва да бъде JPG, JPEG, PNG или WEBP.',
            'image.max' => 'Снимката не може да бъде по-голяма от 1 MB.',
            'slug.unique' => 'Вече съществува събитие с този URL адрес.',
            'ends_at.after' => 'Крайната дата трябва да бъде след началната.',
            'capacity.min' => 'Броят места трябва да бъде поне 1.',
            'price.min' => 'Цената не може да бъде отрицателна.',
        ];
    }

    /**
     * Custom attribute names.
     */
    public function attributes(): array
    {
        return [
            'title' => 'Заглавие',
            'slug' => 'URL адрес',
            'image' => 'Снимка',
            'location' => 'Локация',
            'capacity' => 'Брой места',
            'host' => 'Водещ',
            'starts_at' => 'Начало',
            'ends_at' => 'Край',
            'duration' => 'Продължителност',
            'price' => 'Цена',
            'type' => 'Вид събитие',
            'description' => 'Описание',
            'is_active' => 'Статус',
        ];
    }
}
