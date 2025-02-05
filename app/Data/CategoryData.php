<?php
namespace App\Data;


use Illuminate\Http\Request;

class CategoryData
{
    public function __construct(
        public ?string $name,
        public ?string $slug,
    )
    {}

    public function toArray(): array
    {
        return array_filter([
            'name' => $this->name,
            'slug' => $this->slug,
        ], fn($value) => $value !== null);
    }

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? null,
            slug: $data['slug'] ?? null,
        );
    }

    public static function fromRequest(Request $request): self
    {
        return self::fromArray($request->validated());
    }

}
