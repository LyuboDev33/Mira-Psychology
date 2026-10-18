<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],

            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],

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

    public function messages(): array
    {
        return [
            'required' => 'Полето :attribute е задължително.',
            'image.image' => 'Моля, качете валидно изображение.',
            'image.mimes' => 'Снимката трябва да бъде JPG, JPEG, PNG или WEBP.',
            'image.max' => 'Снимката не може да бъде по-голяма от 1 MB.',
            'ends_at.after' => 'Крайната дата трябва да бъде след началната.',
            'capacity.min' => 'Броят места трябва да бъде поне 1.',
            'price.min' => 'Цената не може да бъде отрицателна.',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Заглавие',
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
