<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $fillable = [
        'name', 'title', 'country_id', 'slug'
    ];

    
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
