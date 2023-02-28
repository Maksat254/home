<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = ['id', 'number', 'area', 'floor', 'cost', 'home_id', 'rooms'];

    public function home()
    {
        return $this->belongsTo(home::class);
    }
    public function sales(){
        return $this->hasMany(sales::class);
    }

}
