<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relazione molti a uno con la tabella users
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relazione molti a molti con la tabella services
    public function services() {
        return $this->belongsToMany(Service::class);
    }

    // Relazione molti a molti con la tabella sponsors
    public function sponsors() {
        return $this->belongsToMany(Sponsor::class);
    }

    // Relazione uno a molti con la tabella messages
    public function messages() {
        return $this->hasMany(Message::class);
    }

    // Relazione uno a molti con la tabella views
    public function views() {
        return $this->hasMany(View::class);
    }
}