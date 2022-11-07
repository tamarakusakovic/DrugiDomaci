<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'address', 'phone'];
    protected $with = ['procedures'];

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }
}
