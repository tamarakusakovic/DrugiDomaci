<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable = ['laboratory_id', 'price', 'analysis_id'];
    protected $with = ['analysis'];

    public function analysis()
    {
        return $this->belongsTo(Analysis::class);
    }

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }
}
