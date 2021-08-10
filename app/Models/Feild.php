<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feild extends Model
{
    use HasFactory;

    public function candidates(){
        return $this->hasMany(Candidate::class,'feild_id');
    }
}
