<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory, UuidTrait; 

    public $incrementing= false;
    protected $keyType = 'uuid';
    
    protected $fillable = ['tweet'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
