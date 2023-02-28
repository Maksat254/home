<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $fillable = ['id', 'years_of_construcion', 'floars', 'name', 'price'];

    public function apartment(){
        return $this->hasMany(Apartment::class);
    }

    public function slale(){
        return $this->hasMany(sales::class);
    }

}
