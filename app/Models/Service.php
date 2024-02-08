<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relazione molti a molti con la tabella apartments
    public function apartments(){
        return $this->belongsToMany(Apartment::class);
    }
}