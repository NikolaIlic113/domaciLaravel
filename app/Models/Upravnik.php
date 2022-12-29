<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zgrada;

class Upravnik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'broj_licence'
    ];


    public function zgrade()
    {
        return $this->hasMany(Zgrada::class);
    }
}
