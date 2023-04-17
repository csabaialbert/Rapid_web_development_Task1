<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;

    protected $fillable = [ 'confid', 'free'];

    //Relationship to confections
    public function confections()
    {
        return $this->belongsTo(Confections::class, 'confid');
    }
}
