<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WartaModel extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'warta';

    // Kolom yang bisa diisi
    protected $guarded = ['id'];

    public function gereja() {
        return $this->belongsTo(Gereja::class);
    }

    public function scopeOfCurrentGereja($query) {
        return $query->where('gereja_id', Auth::user()->gereja->id);
    }

}

