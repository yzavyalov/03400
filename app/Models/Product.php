<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Raw;
use App\Models\RawProduct;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function raws(){
        return $this->belongsToMany(Raw::class, 'raw_product')->withTimestamps();
    }

}
