<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $fillable = ['id', 'date', 'apartment_id', 'customer_id', 'home_id'];

    public function customers(){
        return $this->belongsTo(customers::class);
    }
    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }
    public function home(){
        return $this->belongsTo(home::class);
    }

}
