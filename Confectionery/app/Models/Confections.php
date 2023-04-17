<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confections extends Model
{
    use HasFactory;

    protected $fillable = [ 'cname', 'type', 'prizewinning'];
/*
    public function scopeFilter($query, array $filters)
    {
        if( $filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if( $filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }*/
    //Relationship to Contents
    public function contents()
    {
        return $this->hasMany(Contents::class, 'confid');
    }


    //Relationship to prices
    public function prices()
    {
        return $this->hasOne(Prices::class, 'confid');
    }
}
