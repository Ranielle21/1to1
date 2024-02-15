<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['Name', 'Age', 'Address'];

    public function Academic() {
        return $this->hasOne(Academic::class);


    }
    public function Country() {
        return $this->hasOne(Country::class);
        

    }
}
