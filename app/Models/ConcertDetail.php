<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcertDetail extends Model
{
    use HasFactory;

    protected $table = 'concert_details';

    protected $guarded = ['id'];
    protected $fillable = ['concert_id', 'venue_id'];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
