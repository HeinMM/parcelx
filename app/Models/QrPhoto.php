<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrPhoto extends Model
{
    use HasFactory;

    public function qrOwner()
    {
        return $this->belongsTo(AuthYTYBooking::class,"booking_id","id","qr_photos");
    }
}
