<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public function shipmentHistories()
    {
        return $this->hasManyThrough(ShipmentHistory::class, Shipment::class);
    }

}
