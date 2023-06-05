<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
        'firstname',
        'midname',
        'lastname',
        'num'
    ];
    use HasFactory;

    public function place(){
        return $this->belongsTo(places::class);
    } 
}
