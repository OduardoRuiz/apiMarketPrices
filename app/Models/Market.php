<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'cnpj'];

    
    public function Products(){
        return $this->belongsToMany(Product::class)->withPivot('price')->withTimestamps();
    }
}
