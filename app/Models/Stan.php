<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zgrada;

class Stan extends Model
{
    use HasFactory;


    public function zgrada()
    {
        return $this->belongsTo(Zgrada::class);
    }
}
