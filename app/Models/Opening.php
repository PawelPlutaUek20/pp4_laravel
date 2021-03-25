<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];
    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
