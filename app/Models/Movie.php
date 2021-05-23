<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  
    use HasFactory;

    protected $guarded = [];
    protected $fillables = ['title', 'imdb_rate', 'length_min', 'plot', 'year_released', 'country_id', 'banner'];

    public function episodes()
    {
        return $this->belongsToMany(Episode::class);
    }
}
