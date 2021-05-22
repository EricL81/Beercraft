<?php

namespace App\Models;

use App\Models\Brewery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beer extends Model
{
    use HasFactory;

    public function breweries()
    {
        $this->belongsToMany(Brewery::class);
    }
}
