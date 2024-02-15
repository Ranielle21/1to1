<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $table='_academic';
    protected $fillable=['Course', 'Year'];

    public function students() {
    return $this->belongsTo(students::class);
    }
}
