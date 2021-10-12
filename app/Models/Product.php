<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'quantity', 'EAN', 'unit'];

    public function Markets(){
        return $this->belongsToMany(Market::class)->withPivot('price')->withTimestamps();
    }

}
