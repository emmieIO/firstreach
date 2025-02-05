<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Shipment extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function destination()
    {
        return $this->belongsTo(Location::class, 'destination_id', 'id');
    }

    public function origin()
    {
        return $this->belongsTo(Location::class, 'origin_id', 'id');
    }

    public function shipmentHistories()
    {
        return $this->hasMany(ShipmentHistory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, "created_by");
    }


}
