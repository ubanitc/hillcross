<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beats extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'beat_name',
        'path',
        'status',
        'data_id',
        'genre',
    ];
public function user(){
    return $this->belongsTo(User::class);
}
}
