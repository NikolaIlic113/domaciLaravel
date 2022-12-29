<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stan;
use App\Models\Upravnik;

class Zgrada extends Model
{
    use HasFactory;


    public function stanovi()
    {
        return $this->hasMany(Stan::class);
    }

    public function upravnik()
    {
        return $this->belongsTo(Upravnik::class);
    }
}
