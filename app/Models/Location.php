<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'price'];

public function location(){
    return $this->hasMany(related: Order::class);
}

}
