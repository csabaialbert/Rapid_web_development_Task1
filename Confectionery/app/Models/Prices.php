<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    use HasFactory;

    protected $fillable = ['confid', 'price', 'unit'];
    
    //Relationship to confections
    public function confections()
    {
        return $this->belongsTo(Confections::class, 'confid');
    }
}
