<?php

namespace App\Http\Requests;

use App\Enums\StatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateShipmentRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sender_name' => 'required|string|max:255',
            'sender_phone' => 'required|string|max:20',
            'sender_email' => 'required|email|max:255',
            'sender_address' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'receiver_address' => 'required|string|max:255',
            'receiver_phone' => 'required|string|max:20',
            'receiver_email' => 'required|email|max:255',
            'origin_id' => 'required|exists:locations,id',
            'destination_id' => 'required|exists:locations,id',
            'category_id' => 'required|exists:categories,id',
            'status' => ['required', 'string', 'max:255', Rule::enum(StatusEnum::class)],
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'shipment_date' => 'nullable|date',
            'expected_delivery_date' => 'nullable|date',
        ];
    }

    public function attributes(): array
    {
        return [
            "origin_id" => "Origin port",
            'destination_id' => "Destination port",
            'category_id' => "Shipment category"
        ];
    }
}
