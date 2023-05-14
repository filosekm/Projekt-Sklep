<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CzescSamochodowa extends Model
{
    protected $table = 'czesc_samochodowa';

    protected $fillable = [
        'nazwa',
        'producent',
        'numer_seryjny',
        'ilosc',
        'kategoria',
    ];
}
