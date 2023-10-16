<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestDetail extends Model
{
    use HasFactory;

    protected $table = 'guest_details';

    protected $guarded = ['id'];
    protected $fillable = ['guest_id', 'concert_id'];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
