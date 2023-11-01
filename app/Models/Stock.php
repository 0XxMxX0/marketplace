<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    protected $fillable = [
        'name',
        'price',
        'amount',
        'description',
        'id_typeRegister'
    ];

    use HasFactory;
    protected $table = 'stock';

    public function type(){
        return $this->belongsTo(TypeRegister::class,'id_typeRegister');
    }
}
