<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Item extends Model
{
    protected $fillable = [ 
        'nome', 
        'descricao',
        'categoria',
        'quantidade',
        'estoque_min',
        'estoque_max'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
