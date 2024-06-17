<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'worker_id',
        'service_id',
        'booking_date',
        'start_time',
        'end_time',
        'total_cost',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
