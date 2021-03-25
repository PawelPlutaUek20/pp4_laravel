<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['opening_id','name','pgn'];

    public function opening()
    {
        return $this->belongsTo(Opening::class);
    }
}
