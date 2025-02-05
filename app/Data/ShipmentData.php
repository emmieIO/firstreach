<?php

namespace App\Data;

use Illuminate\Http\Request;

class ShipmentData
{
    public function __construct(
           public ?string $sender_name,
    public ?string $sender_phone,
    public ?string $sender_email,
    public ?string $sender_address,
    public ?string $receiver_name,
    public ?string $receiver_address,
    public ?string $receiver_phone,
    public ?string $receiver_email,
    public ?int $origin_id,
    public ?int $destination_id,
    public ?int $category_id,
    public ?string $status,
    public ?float $amount,
    public ?string $description,
    public ?string $shipment_date,
    public ?string $expected_delivery_date,
    ) {

    }

    public function toArray() : array {
        return array_filter([
            'sender_name' => $this->sender_name,
            'sender_phone' => $this->sender_phone,
            'sender_email' => $this->sender_email,
            'sender_address' => $this->sender_address,
            'receiver_name' => $this->receiver_name,
            'receiver_address' => $this->receiver_address,
            'receiver_phone' => $this->receiver_phone,
            'receiver_email' => $this->receiver_email,
            'origin_id' => $this->origin_id,
            'destination_id' => $this->destination_id,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'amount' => $this->amount,
            'description' => $this->description,
            'shipment_date' => $this->shipment_date,
            'expected_delivery_date' => $this->expected_delivery_date,
        ], fn($value)=> $value !== null);
    }

    /**
     * Create a new ShipmentData instance from an array of data.
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['sender_name'] ?? null,
            $data['sender_phone'] ?? null,
            $data['sender_email'] ?? null,
            $data['sender_address'] ?? null,
            $data['receiver_name'] ?? null,
            $data['receiver_address'] ?? null,
            $data['receiver_phone'] ?? null,
            $data['receiver_email'] ?? null,
            $data['origin_id'] ?? null,
            $data['destination_id'] ?? null,
            $data['category_id'] ?? null,
            $data['status'] ?? null,
            $data['amount'] ?? null,
            $data['description'] ?? null,
            $data['shipment_date'] ?? null,
            $data['expected_delivery_date'] ?? null
        );
    }


    public static function fromRequest(Request $request){
        return self::fromArray($request->validated());
    }
}
