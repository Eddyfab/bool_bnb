<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relazione molti a uno con la tabella apartments
    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }
}