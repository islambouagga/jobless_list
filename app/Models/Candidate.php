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
        'email',
        'phone',
        'birthday',
        'birthplace',
        'residence',
        'verification_card',
        'commune',
        'Electricity_bill',
        'field',
        'Study_level',
        'Certificate',
        'wassit',
        'Anem',
        'statu',
    ];
}
