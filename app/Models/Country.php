<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table='_country';
    protected $fillable=['Continent', 'Country_name', 'Capital'];

    public function students() {
        return $this->belongsTo(students::class);
        }
}
