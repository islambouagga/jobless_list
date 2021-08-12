<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'district_id',
    ];

    public function users(){
        return $this->morphMany(User::class ,'usertable');
    }

    public function district(){
        return $this->belongsTo(District::class);
    }
}
