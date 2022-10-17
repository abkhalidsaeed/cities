<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    public $timestamps = false;

    protected $fillable = [
        'country_code', 'country_name', 'is_active', 'sortorder'
    ];

    /**
     * Make relation with WorldAirport Model.
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
