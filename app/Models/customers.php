<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'phone', 'email'];

    public function sale()
    {
        return $this->hasMany(sales::class);

    }
}
