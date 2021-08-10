<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sexe',
        'email',
        'phone',
        'birthday',
        'residence',
        'verification_card',
        'commune',
        'Electricity_bill',
        'feild_id',
        'Study_level',
        'Certificate',
        'wassit',
        'Anem',
        'statu',
    ];


    public function field(){
        return $this->belongsTo(Feild::class,'feild_id');
    }
}
