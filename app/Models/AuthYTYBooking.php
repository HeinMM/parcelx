<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthYTYBooking extends Model
{
    use HasFactory;

    protected $casts = [
        'assign_at' => 'datetime',
        'road_at' => 'datetime',
        'qrcode_at' => 'datetime',
        'complete_at' => 'datetime'
      ];
      public function deliveryman()
    {
        return $this->belongsTo(DeliveryMan::class,"delivery_man_id","id","delivery_men");
    }
    public function status()
    {
        return $this->belongsTo(Status::class,"status_id","id","status");
    }
    public function township()
    {
        return $this->belongsTo(Township::class,"receiver_township_id","id","townships");
    }
}
